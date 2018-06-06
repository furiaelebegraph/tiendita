<template>
	<a href="/carrito">Mi carrito {{potitoContador}}</a>
</template>	
<script>
	export default {
		props:["contar"],
		created(){
			window.store.commit("set", this.contar);
		},
		computed:{
			potitoContador(){
				return window.store.state.productsCount;
			}
		}
	}
</script>