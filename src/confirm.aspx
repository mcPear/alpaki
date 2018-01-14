<%@ Page Language="C#" AutoEventWireup="true" CodeFile="confirm.aspx.cs" Inherits="src_confirm" MasterPageFile="~/MasterPage1.master"%>

    <asp:Content ID="Content0" ContentPlaceHolderID="head" runat="server">
    <meta charset="UTF-8">
    <title>Skontaktuj się z nami</title>
    <meta name="description" content="Formularz umożliwiający kontakt z firmą">
    <meta name="keywords" content="kontakt, email">
    </asp:Content>

    <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
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
        </asp:Content>

