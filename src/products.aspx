<%@ Page Language="C#" AutoEventWireup="true" CodeFile="products.aspx.cs" Inherits="src_confirm" MasterPageFile="~/MasterPage1.master"%>

    <asp:Content ID="Content0" ContentPlaceHolderID="head" runat="server">
        <meta charset="UTF-8">
    <title>O produktach</title>
    <meta name="description" content="Informacje o produktach">
    <meta name="keywords" content="informacje, produkty, sklep">       
    </asp:Content>

    <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
        <h1>Informacje o naszych produktach</h1>
        <asp:Repeater ID="Repeater1" runat="server" DataSourceID="LinqDataSource1">
            <ItemTemplate>
                <div class="grad-bottom-right">
                    <h2><%# Eval("header") %></h2>
                    <p><small>Data dodania: <%# Eval("date") %></small></p>
                    <p><%# Eval("description") %></p>
                    </div>
                </ItemTemplate>
        </asp:Repeater>
        <asp:LinqDataSource ID="LinqDataSource1" runat="server" 
            ContextTypeName="DatabaseDataContext" EnableInsert="True" EnableUpdate="True" 
            EntityTypeName="" TableName="products">
        </asp:LinqDataSource>
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
            ConnectionString="<%$ ConnectionStrings:DatabaseConnectionString2 %>" 
            SelectCommand="SELECT [date], [header], [description] FROM [product]"></asp:SqlDataSource>
        </asp:Content>

