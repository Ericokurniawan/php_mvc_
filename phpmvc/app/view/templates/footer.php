<body>
<style>
    html,
body {
  height: 100%;
  font-family: "Nunito Sans", sans-serif;
  -webkit-font-smoothing: antialiased;
}
p {
  font-size: 15px;
  font-family: "Nunito Sans", sans-serif;
  color: #3d3d3d;
  font-weight: 400;
  line-height: 25px;
  margin: 0 0 15px 0;
}
img {
  max-width: 100%;
}
a {
  text-decoration: none;
}
ul {
  padding-left: 0;
}

input:focus {
  outline: none;
}
a:hover,
a:focus {
  text-decoration: none;
  outline: none;
  color: #ffffff;
}

.footer {
  background: #111111;
  padding-top: 70px;
}
.footer-about {
  margin-bottom: 30px;
}
.footer-about .footer-logo {
  margin-bottom: 30px;
}
.footer-about p {
  color: #b7b7b7;
  margin-bottom: 30px;
}
.footer-widget {
  margin-bottom: 30px;
}
.footer-widget h6 {
  color: #ffffff;
  font-size: 15px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 20px;
}
.footer-widget ul li {
  line-height: 36px;
  list-style: none;
}
.footer-widget ul li a {
  color: #b7b7b7;
  font-size: 15px;
}
.footer-widget ul li a:hover {
  color: #e53637;
}
.footer-widget .footer-newslatter p {
  color: #b7b7b7;
}
.footer-widget .footer-newslatter form {
  position: relative;
}
.footer-widget .footer-newslatter form input {
  width: 100%;
  font-size: 15px;
  color: #ffffff;
  background: transparent;
  border: none;
  padding: 15px 0;
  border-bottom: 2px solid #ffffff;
}
.footer-widget .footer-newslatter form input::placeholder {
  color: #b7b7b7;
}
.footer-widget .footer-newslatter form button {
  color: #b7b7b7;
  font-size: 16px;
  position: absolute;
  right: 5px;
  top: 0;
  height: 100%;
  background: transparent;
  border: none;
}
.footer-copyright-text {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  padding: 20px 0;
  margin-top: 40px;
}
.footer-copyright-text p {
  color: #b7b7b7;
  margin-bottom: 0;
}
.footer-copyright-text p i {
  color: #e53637;
}
.footer-copyright-text p a {
  color: #e53637;
}

</style>
<footer class="footer">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, similique.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h6>Social Media</h6>
                        <ul>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">WhatsApp</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2  col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h6>Links</h6>
                        <ul>
                            <li><a href="#">Hubungi kami</a></li>
                            <li><a href="#">Pembayaran</a></li>
                            <li><a href="#">Pengiriman</a></li>
                            

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h6>Surat Berita</h6>
                        <div class="footer-newslatter">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, inventore.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><span><i class="fa fa-envelope"
                                            arial-hidden="true"></i></span>ericokrnwn@gmail.com</button>
                            </form>
                        </div>

                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-copyright-text">
                        <p>Copyright &copy; 2021 Seluruh hak cipta | Dibuat <i class="fa fa-heart-o" arial-hidden="true"></i>
                        oleh <a href="#">Erico Kurniawan</a></p>
                    </div>
                </div>
            </div>


        </div>

    </footer>
</body>
    

<script src="<?= BASE_URL;?>/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
