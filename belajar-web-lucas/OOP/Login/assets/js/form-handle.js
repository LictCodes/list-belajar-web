const form = $(".form")

$(document).ready(() => {
	form.submit((e) => {
		const user = $("#username").val()
		const pass = $("#password").val()
		const alertRes = $(".alert")
		const data = {
			users : user , 
			passw : pass
		}
		$.post("admin/", data, (res) => {
			alertRes.text(res)
		})
		setTimeout(() => {
			window.location.href = "admin/admin.php"
			
		}, 2500)		
		e.preventDefault()
	})
})