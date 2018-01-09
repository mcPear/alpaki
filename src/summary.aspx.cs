using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Collections;
using System.Text;


public partial class src_contact : System.Web.UI.Page
{
   // Page_Load event handler executes when the page is loaded
   protected void Page_Load( object sender, EventArgs e )
   {
        Busket.Text = busketToString();
        reloadCostLabels();

        if (Page.IsPostBack)
        {
            Busket.Text = busketToString();
        }
        if (Session["busket"] == null) 
        {
            RadioButtonListDelivery.Visible = false;
        }
        if(RadioButtonListDelivery.SelectedIndex >= 0){
            OrderConfirmLink.Visible = true;
        }

    } // end method Page_Load

    private void reloadCostLabels() {
        int productsCost = getProductsCost();
        int deliveryCost = getDeliveryCost();
        ProductsCost.Text = productsCost == 0 ? "" : "Koszt produktów: " + productsCost;
        DeliveryCost.Text = deliveryCost == 0 ? "" : "Koszt dostawy: " + deliveryCost;
        FullCost.Text = productsCost == 0 ? "" : "Koszt zamówienia: " + (deliveryCost + productsCost);
        setFullCostInSession(deliveryCost + productsCost);
    }

    private void setFullCostInSession(int fullCost) {
        Session["fullCost"] = fullCost;
    }

    private string busketToString() {
        string nl = "<br />";
        Hashtable busket = (Hashtable)(Session["busket"]);
        if (busket != null)
        {
            StringBuilder result = new StringBuilder();
            result.Append("Zawartość koszyka"+nl+nl);
            foreach (DictionaryEntry entry in busket)
            {
                result.Append(entry.Key + "  " + entry.Value + "zł" + nl);
            }
            return result.ToString();
        }
        return "brak zawartości w koszyku";
    }

    private int getProductsCost() {
        Hashtable busket = (Hashtable)(Session["busket"]);
        if (busket != null)
        {
            int sum = 0;
            foreach (DictionaryEntry entry in busket)
            {
                sum += (int)entry.Value;
            }
            return sum;
        }
        else return 0;
    }

    private int getDeliveryCost()
    {
        Object costObj = Session["deliveryCost"];
        if (costObj == null) return 0;
        else return (int)costObj;
    }

    protected void HandleDeliveryChanged(object sender, EventArgs e)
    {
        switch (RadioButtonListDelivery.SelectedIndex)
        {
            case 0: Session["deliveryCost"] = 10; break;
            case 1: Session["deliveryCost"] = 13; break;
            case 2: Session["deliveryCost"] = 0; break;
        }
        reloadCostLabels();
    }

} // end class Validation
