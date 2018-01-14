<%@ Page Language="C#" AutoEventWireup="true" CodeFile="shop.aspx.cs" Inherits="src_contact" MasterPageFile="~/MasterPage1.master" %>

    <asp:Content ID="Content0" ContentPlaceHolderID="head" runat="server">
    <meta charset="UTF-8">
    <title>Skontaktuj się z nami</title>
    <meta name="description" content="Formularz umożliwiający kontakt z firmą">
    <meta name="keywords" content="kontakt, email">
    </asp:Content>

    <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
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

    <div style="text-align:center">
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
              <br /><br />
        <a href="summary.aspx">Przejdź do podsumowania</a>
        </div>
        </asp:Content>

