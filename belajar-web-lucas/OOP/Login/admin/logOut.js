$(document).ready(() => {
	const button  = $(".logOut");
	button.click((e) => {
		console.log("test")
		$.get("logout.php");
		setTimeout(() => {
			window.location.href = "../";
		},500)
		e.preventDefault();

	});
});