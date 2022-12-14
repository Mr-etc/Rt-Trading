<style type="text/css">
    * {
  font-display: swap;
  font-family: Arial, Helvetica, sans-serif;
}

.wrapper {
  display: flex;
  flex-direction: column;
  margin: 0 auto;
  background-color: #f8f9fa;
  padding: 10px;
  width: 100%;
  max-width: 480px;
  border-radius: 5px;
  border: 1px solid silver;
  overflow: hidden;
}

.wrapper .logo {
  margin: 0 auto;
  display: flex;
  height: 100%;
  color: #202124;
  margin-bottom: 10px;
}

.wrapper .logo_image {
  width: 50px;
  height: auto;
  fill: #202124;
}

.wrapper .logo_text {
  text-transform: uppercase;
  font-weight: 700;
  text-decoration: underline;
  align-self: center;
  letter-spacing: 1px;
}

.wrapper .title {
  margin: 0 auto;
  font-size: 18px;
}

.wrapper .content {
  margin-top: 20px;
  background-color: #e6e6e6;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid silver;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.07);
}

.wrapper .content_field {
  display: block;
  padding: 10px 0;
}

.wrapper .content_field_title {
  white-space: nowrap;
  font-size: 18px;
  color: #727272;
  margin-right: 10px;
}

.wrapper .content_field_value {
  display: block;
  padding: 5px 10px;
  border-bottom: 1px solid black;
  font-size: 16px;
  text-align: right;
}

.wrapper .content_field_value[href] {
  text-decoration: none;
  color: #ff005e;
}

.wrapper .content_field .text_justify {
  text-align: justify;
}
</style>
<div class="wrapper">
    <a class="logo" href="">
    <svg class="logo_image" id="Layer_1" viewBox="70 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m366.123 152.251h-219.98c-5.522 0-10 4.478-10 10v38.233c0 5.522 4.478 10 10 10h4.51l14.84 90.975c.789 4.837 4.968 8.39 9.869 8.39h161.541c4.901 0 9.08-3.553 9.869-8.39l14.84-90.975h4.51c5.522 0 10-4.478 10-10v-38.233c.001-5.522-4.476-10-9.999-10zm-209.98 20h199.98v18.233h-199.98zm172.26 117.598h-144.539l-12.946-79.364h170.432z"></path><path d="m214.919 140.248 41.214-41.282 41.214 41.282c3.903 3.908 10.234 3.913 14.143.012 3.908-3.902 3.913-10.234.012-14.143l-48.291-48.37c-3.725-3.881-10.43-3.881-14.154 0l-48.291 48.37c-3.901 3.908-3.896 10.24.012 14.143 3.906 3.902 10.238 3.896 14.141-.012z"></path><path d="m350.456 383.895c25.956-27.274 46.665-56.073 61.552-85.6 71.221-133.079 2.133-294.001-155.876-298.295-101.544.001-184.157 82.541-184.157 183.996-.132 73.849 37.066 142.523 89.797 198.297 6.604 7.018 13.193 13.578 19.631 19.671-37.914 10.662-60.008 28.885-60.008 50.273 0 38.818 69.421 59.764 134.738 59.764s134.738-20.945 134.738-59.764c0-21.146-21.7-39.252-58.943-49.965 6.087-5.706 12.302-11.835 18.528-18.377zm20.415 68.342c0 16.604-43.65 39.764-114.738 39.764s-114.738-23.16-114.738-39.764c0-10.948 19.889-25.949 57.945-34.1 9.286 7.979 17.893 14.793 25.314 20.376-11.27 3.059-9.351 19.424 2.443 19.687h59.447c12.095-.332 13.653-17.159 1.978-19.802 7.474-5.505 16.094-12.206 25.362-20.053 39.119 8.531 56.987 23.406 56.987 33.892zm-114.642-15.873c-67.027-44.781-165.188-139.866-164.253-252.367-.001-90.428 73.639-163.996 164.157-163.996s164.158 73.568 164.158 163.995c.834 114.823-95.557 208.102-164.062 252.368z"></path></g></svg>
            <span class="logo_text">RT-TRADING</span>
    </a>
    <h1 class="title">?????????????????????? ?????????? ???????????????? ??????????</h1>
    <div class="content">
        <div class="content_field">
            <span class="content_field_title">??????:</span>
            <span class="content_field_value">[php_name]</span>
        </div>
        <div class="content_field">
            <span class="content_field_title">?????????? ?????????????????????? ??????????:</span>
            <a href="mailto:[php_mailto]" class="content_field_value">[php_mailto]</a>
        </div>
        <div class="content_field">
            <span class="content_field_title">???????? ??????????????:</span>
            <span class="content_field_value">[php_topic]</span>
        </div>
        <div class="content_field">
            <span class="content_field_title">???????? ??????????????????????:</span>
            <span class="content_field_value">[php_datetime]</span>
        </div>
        <div class="content_field">
            <span class="content_field_title">??????????????????:</span>
            <span class="content_field_value text_justify">[php_message]</span>
        </div>
    </div>
</div>