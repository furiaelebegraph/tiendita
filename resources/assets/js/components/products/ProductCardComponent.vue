<template>
	<div class="card">
		<header class="bg-primary padding">
			<h2>{{chocolate.nombre}}</h2>
			<h4>{{chocolate.precio}}</h4>
		</header>
	</div>
</template>
<script>
	export default{
		props:{
			chocolate:{
				type: Object

			}
		}
	}
</script>