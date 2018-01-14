<%@ Page Language="C#" AutoEventWireup="true" CodeFile="summary.aspx.cs" Inherits="src_contact" MasterPageFile="~/MasterPage1.master"%>

    <asp:Content ID="Content0" ContentPlaceHolderID="head" runat="server">
    <meta charset="UTF-8">
    <title>Skontaktuj się z nami</title>
    <meta name="description" content="Formularz umożliwiający kontakt z firmą">
    <meta name="keywords" content="kontakt, email">
    </asp:Content>

    <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">

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


        <div style="text-align:center">
                <asp:Label ID="DeliveryLabel" runat="server" Font-Size="Large" ForeColor="Crimson"></asp:Label>
                <asp:RadioButtonList ID="RadioButtonListDelivery" runat="server" OnSelectedIndexChanged="HandleDeliveryChanged" AutoPostBack=true>
                    <asp:ListItem>TNT 10zł</asp:ListItem>
                    <asp:ListItem>Poczta Polska 13zł</asp:ListItem>
                    <asp:ListItem>odbiór osobisty 0zł</asp:ListItem>
                </asp:RadioButtonList>
          <br/>
          <br/>
          <asp:HyperLink ID="OrderConfirmLink" CssClass="textalign" href="confirm.aspx" runat="server" Visible="false">Zloz zamowienie</asp:HyperLink>
                
        </div>
 
    </form>
        </asp:Content>

