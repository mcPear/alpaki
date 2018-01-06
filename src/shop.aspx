<%@ Page Language="C#" AutoEventWireup="true" CodeFile="shop.aspx.cs" Inherits="src_contact" %>

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
            Nasza oferta
        </h2>
        <hr width="350" align="left" color="DarkSeaGreen" />
        <asp:Label 
            ID="Label1" 
            runat="server"
            >
        </asp:Label>

        <asp:RadioButtonList
             ID="RadioButtonList1"
             runat="server"
             RepeatLayout="OrderedList"
             RepeatDirection="Vertical"
             Font-Names="Comic Sans MS"
             Font-Size="Medium"
             OnDataBound="RadioButtonList1_DataBound"
             AutoPostBack="true"
             >
        </asp:RadioButtonList>
        <br />
    </div>

        <h3> Produkty </h3>

      Wybierz produkt z danej kategorii.

      <br /><br />

      <asp:CheckBoxList id="alpakiBox" 
           AutoPostBack="True"
           CellPadding="5"
           CellSpacing="5"
           RepeatDirection="Vertical"
           TextAlign="Right"
           OnSelectedIndexChanged="Check_alpakiClicked"
           runat="server">
      </asp:CheckBoxList>

        <asp:CheckBoxList id="paszeBox" 
           AutoPostBack="True"
           CellPadding="5"
           CellSpacing="5"
           RepeatDirection="Vertical"
           TextAlign="Right"
           OnSelectedIndexChanged="Check_paszeClicked"
           runat="server">
      </asp:CheckBoxList>

        <asp:CheckBoxList id="szamponyBox" 
           AutoPostBack="True"
           CellPadding="5"
           CellSpacing="5"
           RepeatDirection="Vertical"
           TextAlign="Right"
           OnSelectedIndexChanged="Check_szamponyClicked"
           runat="server">
      </asp:CheckBoxList>

        <asp:CheckBoxList id="golarkiBox" 
           AutoPostBack="True"
           CellPadding="5"
           CellSpacing="5"
           RepeatDirection="Vertical"
           TextAlign="Right"
           OnSelectedIndexChanged="Check_golarkiClicked"
           runat="server">
      </asp:CheckBoxList>

      <br /><br />
                <asp:Label 
            ID="Busket" 
            runat="server"
            >
        </asp:Label>
    </form>


<footer>
<p>Copyright 2017</p>
</footer>

</body>
</html>
