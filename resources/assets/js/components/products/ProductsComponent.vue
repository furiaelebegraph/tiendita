<template>
	<section>
		<transition-group
		tag='div'
		:css='false'
		name='fadeIn'
		@before-enter='antesDeEntrar'
		@enter='entro'
		@leave='seFue'
		clas='row'>
			<product-card-component v-bind:chocolate="producto" :data-index='index' v-for='(producto,index) in productos' :key="producto.id"></product-card-component>
		</transition-group>
	</section>
</template>	

<script>
	export default {
		data(){
			return{
				nombre: '(Potato, tambien shidoliro)',
				productos: [
				],
				endpoint: "/producto"
			}
		},
		created(){
			this.fetchPotato();
		},
		methods:{
			fetchPotato(){
				axios.get(this.endpoint).then((response)=>{
					console.log(response.data.data);
					this.productos = response.data.data;
				});
			},
			antesDeEntrar(elemento){
				elemento.style.opacity= 0;
				elemento.style.transform = "scale(0)";
				elemento.style.transition = "all 0.2s cubic-bezier(0.4, 0.0, 0.2, 1)";
			},
			seFue(chochitos){
				chochitos.style.opacity= 0;
				chochitos.style.transform = "scale(0)";
			},
			entro(lolcat){
				const retraso = 200 * lolcat.dataset.index;
				setTimeout(()=>{
				lolcat.style.opacity= 1;
				lolcat.style.transform = "scale(1)";
				}, retraso)
			},
		}
	}
</script>