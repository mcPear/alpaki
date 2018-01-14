<%@ Page Language="C#" AutoEventWireup="true" CodeFile="contact.aspx.cs" Inherits="src_contact" MasterPageFile="~/MasterPage1.master"%>

    <asp:Content ID="Content0" ContentPlaceHolderID="head" runat="server">
    <meta charset="UTF-8">
    <title>Skontaktuj się z nami</title>
    <meta name="description" content="Formularz umożliwiający kontakt z firmą">
    <meta name="keywords" content="kontakt, email">
    </asp:Content>

    <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <h2 style="text-align: center">Skontaktuj się z nami</h2>
    <div style="width: 400px;margin:0 auto;">
        <div id="firstNameDiv">
            <label>Imię :</label>
            <asp:TextBox ID="firstNameTextBox" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="firstNameRequiredFieldValidator" runat="server" 
                   ControlToValidate="firstNameTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze podaj swoje imie" ForeColor="Red"></asp:RequiredFieldValidator>
        </div>
        <div id="lastNameDiv">
            <label>Nazwisko :</label>
            <asp:TextBox ID="lastNameTextBox" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="lastNameRequiredFieldValidator" runat="server" 
                   ControlToValidate="lastNameTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze podaj swoje nazwisko" ForeColor="Red"></asp:RequiredFieldValidator>
        </div>
        <div id="emailDiv">
            <label>Email :</label>
            <asp:TextBox ID="emailTextBox" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="emailRequiredFieldValidator" runat="server" 
                   ControlToValidate="emailTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze podaj swoj adres email" ForeColor="Red"></asp:RequiredFieldValidator>
            <asp:RegularExpressionValidator ID="emailRegularExpressionValidator" 
                   runat="server" ControlToValidate="emailTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze podaj swoj poprawny adres email" ForeColor="Red" 
                   ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
        </div>
        <div id="emailDiv">
            <label>Powtórz email :</label>
            <asp:TextBox ID="repeatEmailTextBox" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                   ControlToValidate="repeatEmailTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze powtórz swój email" ForeColor="Red"></asp:RequiredFieldValidator>
            <asp:CompareValidator ID="CompareEmail" 
                    ControlToValidate="repeatEmailTextBox" 
                    ControlToCompare="emailTextBox" 
                    Type="String"
                    Display="Dynamic" 
                    Operator="Equal" 
                    ErrorMessage="Email różni się od wprowadzonego" ForeColor="Red"
                    runat="server"/>
        </div>
        <div id="phoneDiv">
            <label>Telefon :</label>
            <asp:TextBox ID="phoneTextBox" runat="server"></asp:TextBox><br />
                <asp:RequiredFieldValidator ID="phoneRequiredFieldValidator" runat="server" 
                   ControlToValidate="phoneTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze podaj swoj numer telefonu" ForeColor="Red"></asp:RequiredFieldValidator>
                <asp:RegularExpressionValidator ID="phoneRegularExpressionValidator" 
                   runat="server" ControlToValidate="phoneTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze podaj swoj poprawny numer telefonu" ForeColor="Red" 
                   ValidationExpression="((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}"></asp:RegularExpressionValidator>
        </div>
        <div id="ageDiv">
            <label>Wiek :</label>
            <asp:TextBox ID="ageTextBox" runat="server"></asp:TextBox><br />
                <asp:RequiredFieldValidator ID="ageRequiredFieldValidator" runat="server" 
                   ControlToValidate="ageTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze podaj swoj wiek" ForeColor="Red"></asp:RequiredFieldValidator>
                <asp:RangeValidator ID="ageRangeValidator" runat="server" ControlToValidate="ageTextBox" MaximumValue="120" MinimumValue="18"
                 ForeColor="Red" ErrorMessage="Prawidłowy wiek to dorosły do 120 lat" runat="server" Display="Dynamic" Type="Integer"/>
        </div>
        <div id="contentDiv">
            <label>Treść :</label>
            <asp:TextBox ID="contentTextBox" TextMode="multiline" Columns="30" Rows="5" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="contentRequiredFieldValidator" runat="server" 
                   ControlToValidate="contentTextBox" Display="Dynamic" 
                   ErrorMessage="Prosze podaj tresc wiadomosci" ForeColor="Red"></asp:RequiredFieldValidator>
        </div>
        <div style="text-align: center">
          <asp:Button ID="submitButton" runat="server" Text="Submit" />
        </div>
        <p>
        <asp:Label ID="outputLabel" runat="server" Visible="False"></asp:Label>
        </p>
    </div>
        </asp:Content>
