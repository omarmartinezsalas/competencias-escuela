var urlusers='../controller/controller_generica.php';
		//var urlusers='https://randomuser.me/api';
		//var urlusers='../controller/controller_diciplinar.php';
	var app = new Vue({
  	el: '#app',
  	created:function(){
  		this.getUsers();

  	},
  	data: 
  		{
    		lists: [],
    		buscar: ''

	  	},
	  	methods: {
	  		getUsers: function()
	  		{
		  		axios.get(urlusers).then(response =>{
		  			this.lists=response.data
		  		});
	  		}
	  	},
	  	computed: {
	  		searchUsers: function()
	  		{
	  			return this.lists.filter((item) => item.des.includes(this.buscar));
	  		}
	  	}	,
	  
	});
