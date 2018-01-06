<%@ Page Language="C#" AutoEventWireup="true" CodeFile="summary.aspx.cs" Inherits="src_contact" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Skontaktuj się z nami</title>
    <meta name="description" content="Formularz umożliwiający kontakt z firmą">
    <meta name="keywords" content="kontakt, email">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<style type="text/css">
    label{
        width: 5em;
        float: left;
    }
    div{
        margin-bottom: 2em;
    }
</style>
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



    <form id="form1" runat="server">
    <div>
        <h2 style="color:SeaGreen; font-style:italic;">
            Podsumowanie zamówienia
        </h2>

        <br /><br />
        <div style="margin-left: auto; margin-right: auto; text-align: center;">
               <asp:Label 
            ID="Busket" 
            runat="server"
            >
        </asp:Label>
               <br /><br />
                <asp:Label 
            ID="ProductsCost" 
            runat="server"
            >
        </asp:Label>
             <br /><br />
                <asp:Label 
            ID="DeliveryCost" 
            runat="server"
            >
        </asp:Label>

                <br /><br />
                <asp:Label 
            ID="FullCost" 
            runat="server"
            >
        </asp:Label>
            </div>


        <div>
                <asp:Label ID="DeliveryLabel" runat="server" Font-Size="Large" ForeColor="Crimson"></asp:Label>
                <asp:RadioButtonList ID="RadioButtonListDelivery" runat="server" OnSelectedIndexChanged="HandleDeliveryChanged">
                    <asp:ListItem>TNT 10zł</asp:ListItem>
                    <asp:ListItem>Poczta Polska 13zł</asp:ListItem>
                    <asp:ListItem>odbiór osobisty 0zł</asp:ListItem>
                </asp:RadioButtonList>
                
            </div>
    </form>


<footer>
<p>Copyright 2017</p>
</footer>

</body>
</html>
