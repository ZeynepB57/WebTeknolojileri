
function kontrol()
{
  var adValue=document.forms["form1"]["ad"].value;
  var soyadValue=document.forms["form1"]["soyad"].value;
  var epostaValue=document.forms["form1"]["eposta"].value;
  var sehirValue=document.forms["form1"]["sehir"].value;
  
  if (adValue == "") {
   alert("Ad Kısmı Boş bırakılamaz");
   return false;
  }
  if (soyadValue == "") {
  alert("soyad Kısmı Boş bırakılamaz");
  return false;
  }
 

 if (epostaValue == "") {
  alert("E-mail Kısmı Boş bırakılamaz");
  return false;
 }
 else var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
 if (forMail.test(epostaValue) == false) {
     alert("Geçersiz Mail Adresi!!!");
     return false;
 }

  
 if (sehirValue == "...") {
  alert(" Şehir Kısmı Boş Bırakılmaz Bir Şehir Seçiniz");
  return false;
 }

      document.writeln(ad);
			document.writeln(soyad );
			document.writeln(eposta);
			document.writeln(sehir);
			
 
}