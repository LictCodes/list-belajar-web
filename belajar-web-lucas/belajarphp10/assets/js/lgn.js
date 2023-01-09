$(document).ready(function (){
	$(".fm").submit((e) => {
		// console.log("Hello world")
		login((res) => {
			const r = $(".respon")
			if(res == "OK") {
				// r.text("Login sukses")
				const Toast = swal({
					target : $(".alert"),
  					button: {
  						text: "",
  						visible: false
  					},
  					timer: 3000,
  					timerProgressBar: true,
  					didOpen: (toast) => {
					    toast.addEventListener('mouseenter', Swal.stopTimer)
    					toast.addEventListener('mouseleave', Swal.resumeTimer)
  					},
  					icon: 'success',
  					title: 'Signed in successfully'
				})

						
				window.location.href = "admin/"
			} else{
				r.text("username atau password salah").fadeIn("slow")
			}
		})
		e.preventDefault()
	})

})
function login(callback){
	$("#kirim").click(function (){
		const username = $("#user").val()
		const password = $("#pass").val()
		const data = {
			user : username,
			pass : password
		}
		$.post("admin-login.php" , data, (respon) => {
			callback(respon)
		}) 
	})
}