using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Collections;
using System.Text;

public partial class src_confirm : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["busket"] != null && Session["fullCost"] != null)
        {
            Acknowledgement.Text = "Dziekujemy za twoje zamowienie";
            int fullCost = (int)Session["fullCost"];
            FullCost.Text = "Całkowity koszt zamówienia : "+fullCost.ToString();

            Session.Abandon();
        }
    }


}