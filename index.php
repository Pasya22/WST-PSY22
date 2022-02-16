<html>
    <head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script type="text/javascript" src="client.js"></script>
		<link rel="stylesheet" href="style.css">
       
    </head>
    <body>
        <!-- <h1>Response from server:</h1>
        <div id="response"></div>

        <div class="message-area">
	        <form method="post">
                <input type="text" name="name" id="name" placeholder="Your name here" value="" />
	        	<input type="text" name="message" id="message" placeholder="Type message here" />
	    	</form>
	    </div> -->
		<br>
        <center>
            <h2><span class="badge badge-dark">WST</span><span class="badge badge-secondary">Chatting</span></h2>
        </center>
        <div class="box" >
            <ul class="content" id="content">
                <div id="response">
               
                </div>
            </ul>
            <form  method="post" class="form">
                <input type="hidden" name="id_chat"  class="name" >
                <input type="text" name="nama"  class="name" placeholder="masukan nama">
                <input type="text" name="text_chat"  class="name" placeholder="masukan pesan" >
                <input type="hidden" name="tgl"    value="<?= date('Y-m-d');?>">
            </form>
         </div>
    </body>
</html>
