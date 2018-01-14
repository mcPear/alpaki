<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Logon.aspx.cs" Inherits="src_confirm" MasterPageFile="~/MasterPage1.master"%>

    <asp:Content ID="Content0" ContentPlaceHolderID="head" runat="server">
<meta charset="UTF-8">
    <title>Forms Authentication - Login</title>
    <meta name="description" content="Logowanie">
    <meta name="keywords" content="logowanie">       
    </asp:Content>

    <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
<div>
    <h3>
      Logowanie</h3>
    <div class="grad-bottom-right">
    <table>
      <tr>
        <td>
          E-mail :</td>
        <td>
          <asp:TextBox ID="UserEmail" runat="server" /></td>
        <td>
          <asp:RequiredFieldValidator ID="RequiredFieldValidator1" 
            ControlToValidate="UserEmail"
            Display="Dynamic" 
            ErrorMessage="Cannot be empty." 
            runat="server" />
        </td>
      </tr>
      <tr>
        <td>
          Hasło:</td>
        <td>
          <asp:TextBox ID="UserPass" TextMode="Password" 
             runat="server" />
        </td>
        <td>
          <asp:RequiredFieldValidator ID="RequiredFieldValidator2" 
            ControlToValidate="UserPass"
            ErrorMessage="Cannot be empty." 
            runat="server" />
        </td>
      </tr>
      <tr>
        <td>
          Pamiętaj mnie?</td>
        <td>
          <asp:CheckBox ID="Persist" runat="server" /></td>
         
        <td>
             </td>
      </tr>
    </table>
        <div style="width: 100%; text-align:center">
    <asp:Button ID="Submit1" OnClick="Logon_Click" Text="Zaloguj" 
       runat="server" />
            </div>
    <p>
      <asp:Label ID="Msg" ForeColor="red" runat="server" />
    </p>
        </div>
</div>
<img class="center img-rounded" src="../res/image/hodowla.jpg" alt="Hodowla" height="600" width="1000">
        </asp:Content>

