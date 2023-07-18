<!DOCTYPE html>
<html>
   <head>
      <title>Formulir Order Checkout</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <div class="col-lg-6 col-lg-offset-3">
            <h4 class="text-center">Formulir Order Checkout</h4>
            <div class="panel panel-success">
               <div class="panel-heading">
                  <h3 class="panel-title text-center">Checkout</h3>
               </div>
               <div class="panel-body">
                  <form>
                     <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama" id="name">
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                     </div>
                     <div class="form-group">
                        <label for="phone">Nomor Kontak / WhatsApp</label>
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Kontak / WhatsApp" id="phone">
                     </div>
                     <div class="form-group">
                        <label for="product">Pilih Produk</label>
                        <select name="product" class="form-control" id="product">
                           <option value="">-- Pilih Produk --</option>
                           <option value="Gold">Gold</option>
                           <option value="Platinum">Platinum</option>
                           <option value="Silver">Silver</option>
                           <option value="Gedung">Gedung</option>
                           <option value="Setia-W.0">Seta W.O</option>
                           <option value="MakeUp">Make Up</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="description">Catatan</label>
                        <textarea name="description" class="form-control" rows="3" id="description"></textarea>
                     </div>
                     <div class="form-group text-center">
                        <button class="btn btn-success send">Pesan via WhatsApp</button>
                     </div>
                  </form>
                  <div id="text-info"></div>
               </div>
            </div>
         </div>
      </div>

	<script type="text/javascript">
		$(document).on('click','.send', function(){
			/* Inputan Formulir */
			var input_name 			= $("#name").val(),
			    input_email 		= $("#email").val(),
			    input_phone 		= $("#phone").val(),
			    input_product 		= $("#product").val(),
			    input_description 	= $("#description").val();

			/* Pengaturan Whatsapp */
			var walink 		= 'https://web.whatsapp.com/send',
			    phone 		= '6281353677822',
			    text 		= 'Halo saya ingin memesan ',
			    text_yes	= 'Pesanan Anda berhasil terkirim.',
			    text_no 	= 'Isilah formulir terlebih dahulu.';

			/* Smartphone Support */
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				var walink = 'whatsapp://send';
			}

			if(input_name != "" && input_phone != "" && input_product != ""){
				/* Whatsapp URL */
				var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
				    '*Nama* : ' + input_name + '%0A' +
				    '*Alamat Email* : ' + input_email + '%0A' +
				    '*Nomor Kontak / Whatsapp* : ' + input_phone + '%0A' +
				    '*Produk* : ' + input_product + '%0A' +
				    '*Catatan* : ' + input_description + '%0A';

				/* Whatsapp Window Open */
				window.open(checkout_whatsapp,'_blank');
				document.getElementById("text-info").innerHTML = '<div class="alert alert-success">'+text_yes+'</div>';
			} else {
				document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">'+text_no+'</div>';
			}
		});
	</script>
</body>
</html>