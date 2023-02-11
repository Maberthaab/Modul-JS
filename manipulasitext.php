<script>
var message="Welcome to our site!"
var format=message.toUpperCase()
var size=1
for (i=0;i<message.length;i++){
	document.write(format.charAt(i).fontsize(size).bold())
	if (size<7){
		size++
	}else{
		size=1
	}
}
</script>