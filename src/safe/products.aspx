<%@ Page Language="C#" AutoEventWireup="true" CodeFile="products.aspx.cs" Inherits="src_confirm" MasterPageFile="~/MasterPage1.master"%>

    <asp:Content ID="Content0" ContentPlaceHolderID="head" runat="server">
        <meta charset="UTF-8">
    <title>O produktach</title>
    <meta name="description" content="Informacje o produktach">
    <meta name="keywords" content="informacje, produkty, sklep">       
    </asp:Content>

    <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">

           <table class="style1">
          <tr>
             <td valign="top">
                Nazwa:</td>
             <td valign="top">
                <asp:TextBox ID="headerTextBox" runat="server" CssClass="singleLineTextBox"></asp:TextBox>
             </td>
          </tr>
          <tr>
             <td valign="top">
                Data:</td>
             <td valign="top">
                <asp:TextBox ID="dateTextBox" runat="server" CssClass="singleLineTextBox" type="date"></asp:TextBox>
             </td>
          </tr>
          <tr>
             <td valign="top">
                Opis:</td>
             <td valign="top">
                <asp:TextBox ID="descriptionTextBox" runat="server" CssClass="multilineTextBox" 
                   TextMode="MultiLine"></asp:TextBox>
             </td>
          </tr>
          <tr>
             <td valign="top">
                 &nbsp;</td>
             <td valign="top">
                <asp:Button ID="submitButton" runat="server" Text="Dodaj" 
                   onclick="submitButton_Click"  />
                &nbsp;<asp:Button ID="clearButton" runat="server" Text="Wyczysc" 
                  onClick="clearButton_Click" />
             </td>
          </tr>
       </table>

        <br>
        <br>

                 <asp:LinqDataSource ID="productsLinqDataSource" runat="server" 
             ContextTypeName="DatabaseDataContext" EnableInsert="True" EntityTypeName="" 
             TableName="products" EnableUpdate="True" EnableDelete="True">
          </asp:LinqDataSource>

        <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
    DataKeyNames="Id" DataSourceID="productsLinqDataSource">
            <Columns>
                <asp:CommandField ShowEditButton="True" ShowDeleteButton="True" />
                <asp:BoundField DataField="Id" HeaderText="Id" InsertVisible="False" 
                    ReadOnly="True" SortExpression="Id" />
                <asp:BoundField DataField="date" HeaderText="date" SortExpression="date" />
                <asp:BoundField DataField="header" HeaderText="header" 
                    SortExpression="header" />
                <asp:BoundField DataField="description" HeaderText="description" 
                    SortExpression="description" />
            </Columns>
</asp:GridView>
        </asp:Content>

