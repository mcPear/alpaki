<%@ Page Language="C#" AutoEventWireup="true" CodeFile="contact.aspx.cs" Inherits="src_contact" MasterPageFile="~/MasterPage1.master"%>

    <%@ Register assembly="AjaxControlToolkit" namespace="AjaxControlToolkit" tagprefix="asp" %>

    <asp:Content ID="Content0" ContentPlaceHolderID="head" runat="server">
    <meta charset="UTF-8">
    <title>Skontaktuj się z nami</title>
    <meta name="description" content="Formularz umożliwiający kontakt z firmą">
    <meta name="keywords" content="kontakt, email">
    </asp:Content>

    <asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
          <asp:ToolkitScriptManager ID="ToolkitScriptManager1" runat="server">
          </asp:ToolkitScriptManager>
    <h2 style="text-align: center">Skontaktuj się z nami</h2>
    <div style="width: 400px;margin:0 auto;">
        <div id="firstNameDiv">
            <label>Imię :</label>
            <asp:TextBox ID="firstNameTextBox" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="firstNameRequiredFieldValidator" runat="server" 
                   ControlToValidate="firstNameTextBox" Display="None" 
                   ErrorMessage="Prosze podaj swoje imie" ForeColor="Red"></asp:RequiredFieldValidator>
            <asp:ValidatorCalloutExtender ID="firstNameRequiredFieldValidator_ValidatorCalloutExtender" 
                runat="server" TargetControlID="firstNameRequiredFieldValidator">
            </asp:ValidatorCalloutExtender>
        </div>
        <div id="lastNameDiv">
            <label>Nazwisko :</label>
            <asp:TextBox ID="lastNameTextBox" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="lastNameRequiredFieldValidator" runat="server" 
                   ControlToValidate="lastNameTextBox" Display="None" 
                   ErrorMessage="Prosze podaj swoje nazwisko" ForeColor="Red"></asp:RequiredFieldValidator>
            <asp:ValidatorCalloutExtender ID="lastNameRequiredFieldValidator_ValidatorCalloutExtender" 
                runat="server" TargetControlID="lastNameRequiredFieldValidator">
            </asp:ValidatorCalloutExtender>
        </div>
        <div id="emailDiv">
            <label>Email :</label>
            <asp:TextBox ID="emailTextBox" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="emailRequiredFieldValidator" runat="server" 
                   ControlToValidate="emailTextBox" Display="None" 
                   ErrorMessage="Prosze podaj swoj adres email" ForeColor="Red"></asp:RequiredFieldValidator>
            <asp:ValidatorCalloutExtender ID="emailRequiredFieldValidator_ValidatorCalloutExtender" 
                runat="server" TargetControlID="emailRequiredFieldValidator">
            </asp:ValidatorCalloutExtender>
            <asp:RegularExpressionValidator ID="emailRegularExpressionValidator" 
                   runat="server" ControlToValidate="emailTextBox" Display="None" 
                   ErrorMessage="Prosze podaj swoj poprawny adres email" ForeColor="Red" 
                   ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
            <asp:ValidatorCalloutExtender ID="emailRegularExpressionValidator_ValidatorCalloutExtender" 
                runat="server" TargetControlID="emailRegularExpressionValidator">
            </asp:ValidatorCalloutExtender>
        </div>
        <div id="emailDiv">
            <label>Powtórz email :</label>
            <asp:TextBox ID="repeatEmailTextBox" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                   ControlToValidate="repeatEmailTextBox" Display="None" 
                   ErrorMessage="Prosze powtórz swój email" ForeColor="Red"></asp:RequiredFieldValidator>
            <asp:CompareValidator ID="CompareEmail" 
                    ControlToValidate="repeatEmailTextBox" 
                    ControlToCompare="emailTextBox" 
                    Type="String"
                    Display="None" 
                    Operator="Equal" 
                    ErrorMessage="Email różni się od wprowadzonego" ForeColor="Red"
                    runat="server"/>
            <asp:ValidatorCalloutExtender ID="CompareEmail_ValidatorCalloutExtender" 
                runat="server" TargetControlID="CompareEmail">
            </asp:ValidatorCalloutExtender>
        </div>
        <div id="phoneDiv">
            <label>Telefon :</label>
            <asp:TextBox ID="phoneTextBox" runat="server"></asp:TextBox><br />
                <asp:RequiredFieldValidator ID="phoneRequiredFieldValidator" runat="server" 
                   ControlToValidate="phoneTextBox" Display="None" 
                   ErrorMessage="Prosze podaj swoj numer telefonu" ForeColor="Red"></asp:RequiredFieldValidator>
                <asp:ValidatorCalloutExtender ID="phoneRequiredFieldValidator_ValidatorCalloutExtender" 
                runat="server" TargetControlID="phoneRequiredFieldValidator">
            </asp:ValidatorCalloutExtender>
                <asp:RegularExpressionValidator ID="phoneRegularExpressionValidator" 
                   runat="server" ControlToValidate="phoneTextBox" Display="None" 
                   ErrorMessage="Prosze podaj swoj poprawny numer telefonu" ForeColor="Red" 
                   ValidationExpression="((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}"></asp:RegularExpressionValidator>
            <asp:ValidatorCalloutExtender ID="phoneRegularExpressionValidator_ValidatorCalloutExtender" 
                runat="server" TargetControlID="phoneRegularExpressionValidator">
            </asp:ValidatorCalloutExtender>
        </div>
        <div id="ageDiv">
            <label>Wiek :</label>
            <asp:TextBox ID="ageTextBox" runat="server"></asp:TextBox><br />
                <asp:RequiredFieldValidator ID="ageRequiredFieldValidator" runat="server" 
                   ControlToValidate="ageTextBox" Display="None" 
                   ErrorMessage="Prosze podaj swoj wiek" ForeColor="Red"></asp:RequiredFieldValidator>
                <asp:RangeValidator ID="ageRangeValidator" runat="server" ControlToValidate="ageTextBox" MaximumValue="120" MinimumValue="18"
                 ForeColor="Red" ErrorMessage="Prawidłowy wiek to dorosły do 120 lat" runat="server" Display="None" Type="Integer"/>
            <asp:ValidatorCalloutExtender ID="ageRangeValidator_ValidatorCalloutExtender" 
                runat="server" TargetControlID="ageRangeValidator">
            </asp:ValidatorCalloutExtender>
        </div>
        <div id="contentDiv">
            <label>Treść :</label>
            <asp:TextBox ID="contentTextBox" TextMode="multiline" Columns="30" Rows="5" runat="server"></asp:TextBox><br />
            <asp:RequiredFieldValidator ID="contentRequiredFieldValidator" runat="server" 
                   ControlToValidate="contentTextBox" Display="None" 
                   ErrorMessage="Prosze podaj tresc wiadomosci" ForeColor="Red"></asp:RequiredFieldValidator>
            <asp:ValidatorCalloutExtender ID="contentRequiredFieldValidator_ValidatorCalloutExtender" 
                runat="server" TargetControlID="contentRequiredFieldValidator">
            </asp:ValidatorCalloutExtender>
        </div>
        <div style="text-align: center">
          <asp:Button ID="submitButton" runat="server" Text="Submit" />
        </div>
        <p>
        <asp:Label ID="outputLabel" runat="server" Visible="False"></asp:Label>
        </p>
    </div>
        </asp:Content>
