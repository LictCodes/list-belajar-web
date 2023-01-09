// belajar tipe data array

const names = [ 
	"Lucas",
	"Renanda",
	""
	// tipe datanya boleh apa saja 
] 
const arr = {
	first : "lucas"
} // array object 

document.writeln(arr.first)
document.writeln(names)
for(let name of names){
	document.writeln(name)
} // perulangan array simple 

for(let i = 0 ; i < names.length ; i++){
	document.writeln(names[i])
}

console.table(names)
names.push("ell")
console.table(names)
console.info(`panjang array => ${names.length}`)
console.info("deleting array names!")
delete names[names.length - 1 ]
console.table(names)
