<template>
	<section>
		<p>Mi componenete super shidoliro {{nombre}}</p>
		<product-card-component v-bind:chocolate="producto" v-for='producto in productos' :key="producto.id"></product-card-component>
	</section>
</template>	

<script>
	export default {
		data(){
			return{
				nombre: '(Potato, tambien shidoliro)',
				productos: [
					{
						id: 1,
						nombre: '50mm',
						precio: 20,
						descripcion: 'Deescripcion 1',
						descripcionCorta: 'Mini Descripcion',
						sku: '12345',
						imagen: 'img/superi-imagen.jpg'
					},
					{
						id: 2,
						nombre: '35mm',
						precio: 10,
						descripcion: 'Deescripcion 2',
						descripcionCorta: 'Mini Descripcion 2',
						sku: '54321',
						imagen: 'img/superi-imagen2.jpg'
					}
				]
			}
		}
	}
</script>