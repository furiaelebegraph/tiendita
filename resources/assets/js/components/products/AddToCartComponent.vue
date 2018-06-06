<template>
	<button @click="addToCart" class='btn btn-primary'> {{message}} </button>
</template>
<script>
	export default {
		data(){
			return	{
				message: "Agregar al carrito",
				endpoint: "/in_shopping_cart",
			}
		},
		props:{
			product:{
				type: Object
			} 
		},
		methods:{
			addToCart(){
				console.log(this.product);
				axios({
					method: 'POST',
					url: this.endpoint,
					data:{
						id_product: this.product.id
					},
					headers:{
						'Accept':'application/json',
						'Content-Type':'application/json'
					}
				}).then(response =>{
					window.store.commit("increment");
					console.log('Santas Patatas se agrego un producto');
				}).catch(error=>{
					console.log('nop');
				});
			}
		}
	}
</script>