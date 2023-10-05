<html>
<body>
<script>
let nums = [1,2,3,4,5,6,7]
let k = 3
	for(i=0;i<k;i++){
		let temps = nums[nums.length-1]
			for(j=nums.length-1;j>0;j--){
				nums[j]=nums[j-1];
				
				nums[0]=temps;
				
	}
	
console.log(nums);
}
</script>
</body>
</html>