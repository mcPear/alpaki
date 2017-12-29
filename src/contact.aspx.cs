using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class src_contact : System.Web.UI.Page
{
   // Page_Load event handler executes when the page is loaded
   protected void Page_Load( object sender, EventArgs e )
   {
      // if this is not the first time the page is loading
      // (i.e., the user has already submitted form data)
      if ( IsPostBack )
      {
         Validate(); // validate the form

         // if the form is valid
         if ( IsValid )
         {
            // retrieve the values submitted by the user
            string firstName = firstNameTextBox.Text;
            string lastName = lastNameTextBox.Text;
            string email = emailTextBox.Text;
            string phone = phoneTextBox.Text;
            string content = contentTextBox.Text;

            // show the the submitted values
            outputLabel.Text = "Dziekujemy za twoja wiadomosc<br/>" +
               "Otrzymalismy informacje od :<br/>";
            outputLabel.Text +=
               String.Format( "Name: {0}{1}E-mail: {2}{1}Phone: {3}",
                  firstName, "<br/>", email, phone);
            outputLabel.Visible = true; // display the output message
         } // end if
      } // end if
   } // end method Page_Load
} // end class Validation
