<%@ Page Language="C#" AutoEventWireup="true" CodeFile="confirm.aspx.cs" Inherits="src_confirm" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Skontaktuj się z nami</title>
    <meta name="description" content="Formularz umożliwiający kontakt z firmą">
    <meta name="keywords" content="kontakt, email">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>

<!--navbar-->
<nav>
    <ul class="main-navigation">
        <li style="float: left">
            <p style="margin: 0;padding: 0;">
                <a href="../src/index.htm">
                    <img src="../res/image/logo2.png\" alt="logo" width="45" height="45">
                    <span style="font-size: xx-large;font-style: oblique;font-variant: small-caps; color: black;font-weight: 400">Polskie Alpaki&trade;</span>
                </a>
            </p>
        </li>
      <li><a style="padding: 35px" href="../src/about.htm">O firmie</a></li>
        <li><a style="padding: 35px" href="../src/shop.aspx">Sklep</a></li>
      <li><a style="padding: 35px" href="#">Dzialalnosc</a>
          <ul>
              <li><a href="../src/contact.aspx">Kontakt</a></li>
          </ul>
      </li>
    </ul>
</nav>

<div style="text-align:center">
    <asp:Label ID = "Acknowledgement" runat="server" style="font-size:xx-large">
    </asp:Label>
    <br>
     <asp:Label style="margin-top: 3em;"
        ID="FullCost" 
        runat="server">
     </asp:Label>
     <br><br>
     <a href=shop.aspx style="margin-top:3em;">Wróć do listy produktów</a>
</div>

<footer>
<p>Copyright 2017</p>
</footer>

</body>
</html>
