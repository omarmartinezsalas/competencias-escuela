clc,clear,close all
k=5
tolerancia = 0.0001
iteraciones=50
funcion_J(1)=0;
counter=2;
continua=true;
%------------------------ ruta de la imagen -------------------------
[nombre, ruta] = uigetfile({'*.jpg;*.tif;*.png;*.gif','All Image Files';...
          '*.*','All Files' },'mytitle',...
          'C:\Users\jafenio\Documents\MATLAB')
if nombre == 0
    return
end
tic %inicia un temporizador de cronómetro
img=imread(fullfile(ruta,nombre));
[f, c, d]=size(img);
filas=f*c;
R=double(reshape(img(:,:,1),1,filas));
G=double(reshape(img(:,:,2),1,filas));
B=double(reshape(img(:,:,3),1,filas));
rgb=[R;G;B];
%-------prelocar---------
cen=zeros(d,k);
norma=zeros(k,filas);
imgtratada=zeros(d,filas);
%------------------------

%--construr la matriz de particiones difusas
Uazar=rand(k,filas);
divisor=repmat(sum(Uazar),k,1);
Uazar=Uazar./divisor;
%u=[0.5, 0, 1, 1, 0; 0.1, 1, 0, 0, 1; 0.4, 0, 0, 0, 0]
%--construr la matriz de particiones difusas
%--calculo de los centroides
uu=Uazar.^2;
while(continua)
    uu=Uazar.^2;
    for i=1:k
        cU=repmat(uu(i,:),d,1);
        ux=cU.*rgb;
        cen(:,i)=sum(ux,2)/sum(uu(i,:));
    end
    for i=1:k
        cenRep=repmat(cen(:,i),1,filas);
        norma(i,:)=sqrt(sum((rgb-cenRep).^2));
    end
    for i=1:k
        centr=repmat(norma(i,:),k,1);
        Uazar(i,:)=ones./(sum((centr./norma).^2));
    end
    funcion_J(counter)=sum(sum((uu.*norma).^2));
    diferencia=abs(funcion_J(counter-1)-funcion_J(counter));
    if (diferencia<tolerancia) || (counter>=iteraciones)
        fprintf('iteracion: %i de %i,   movimiento: %d Fun Obj: %d \n'...
        ,counter,iteraciones,diferencia,funcion_J(counter))
        cen
        continua=false;    
    else
        fprintf('iteracion: %i de %i,   movimiento: %d Fun Obj: %d \n'...
        ,counter,iteraciones,diferencia,funcion_J(counter))
        counter=counter+1;
    end
end
[val, index]=max(Uazar);
%---------------img tratada-----------------------------
for i=1:k 
    mask=repmat(index==i,d,1);
    imgMask=mask.*(repmat(cen(:,i),1,filas));
    imgtratada=imgtratada+imgMask;
end
imgtratada=uint8(floor(reshape(imgtratada',f,c,d)));
figure
subplot(1,2,1)
imshow(img)
subplot(1,2,2)
imshow(imgtratada)
toc