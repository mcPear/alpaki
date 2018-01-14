using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Collections;
using System.Text;

public partial class src_confirm : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void Logon_Click(object sender, EventArgs e)
    {
        if(FormsAuthentication.Authenticate(UserEmail.Text, UserPass.Text))
        {
            FormsAuthentication.RedirectFromLoginPage
               (UserEmail.Text, Persist.Checked);
        }
        else
        {
            Msg.Text = "niepoprawne dane logowania. Proszę spróbuj ponownie.";
        }
    }


}