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
        if (!Page.IsPostBack)
        {
            RadioButtonList1.DataSource = getCategories();
            RadioButtonList1.DataBind();
            bindDataInAllBoxLists();
            unvisibleAllBoxLists();
        }

        if (Page.IsPostBack)
        {
            unvisibleAllBoxLists();
            int index = RadioButtonList1.SelectedIndex;
            visibleOneBoxList(index);
            Busket.Text = busketToString();
        }

    } // end method Page_Load

    private string busketToString() {
        string nl = "<br />";
        Hashtable busket = (Hashtable)(Session["busket"]);
        if (busket != null)
        {
            StringBuilder result = new StringBuilder();
            result.Append("Podglad koszyka (ma być docelewo na osobnej stronie)"+nl+nl);
            foreach (DictionaryEntry entry in busket)
            {
                result.Append(entry.Key + "  " + entry.Value + "zł" + nl);
            }
            return result.ToString();
        }
        return "";
    }

    private void bindDataInAllBoxLists() {
        List<CheckBoxList> boxLists = getAllBoxLists();
        for (int i=0; i< boxLists.Count(); i++) {
            string category = getCategories()[i];
            boxLists[i].DataSource = ((Hashtable)(getProducts()[category])).Keys;
            boxLists[i].DataBind();
        }
    }

    protected void RadioButtonList1_DataBound(object sender, EventArgs e)
    {
        Label1.Text = "Wybierz kategorię: "+ Session["category"];
        Label1.ForeColor = System.Drawing.Color.OrangeRed;
        Label1.Font.Name = "Ms Sans Serif";
        Label1.Font.Italic = true;
        Label1.Font.Underline = true;
    }

    protected void Check_alpakiClicked(Object sender, EventArgs e)
    {
        CheckCategoryClicked("alpaki", alpakiBox);
    }

    protected void Check_paszeClicked(Object sender, EventArgs e)
    {
        CheckCategoryClicked("pasze", paszeBox);
    }

    protected void Check_szamponyClicked(Object sender, EventArgs e)
    {
        CheckCategoryClicked("szampony", szamponyBox);
    }

    protected void Check_golarkiClicked(Object sender, EventArgs e)
    {
        CheckCategoryClicked("golarki", golarkiBox);
    }

    private void CheckCategoryClicked(String category, CheckBoxList boxList) {
        Hashtable busket = (Hashtable)(Session["busket"]);
        if (busket == null) {
            busket = new Hashtable();
        }

        List<string> products = new List<string>();
        for (int i = 0; i < boxList.Items.Count; i++)
        {
            string product = boxList.Items[i].Text;
            if (boxList.Items[i].Selected)
            {
                if (!busket.ContainsKey(product))
                {
                    busket.Add(product, FindPrice(category, product)); 
                }
            }
            else {
                if (busket.ContainsKey(product))
                {
                    busket.Remove(product);
                }
            }
        }

        Session["busket"] = busket;
    }

    private CheckBoxList GetBoxList(int index) {
        return getAllBoxLists()[index];
    }

    private List<CheckBoxList> getAllBoxLists() {
        List<CheckBoxList> list = new List<CheckBoxList>();
        list.Add(alpakiBox);
        list.Add(paszeBox);
        list.Add(szamponyBox);
        list.Add(golarkiBox);
        return list;
    }


    private int FindPrice(String category, String product) {
        Hashtable productsInCategories = getProducts();
        Hashtable products = (Hashtable)productsInCategories[category];
        return (int)products[product];
    }

    private string[] getCategories() {
        string[] array = { "alpaki", "pasze", "szampony", "golarki" };
        return array;
    }

    private void visibleOneBoxList(int index) {
        if(index >= 0 && index < getAllBoxLists().Count)
        getAllBoxLists()[index].Visible = true;
    }

    private void unvisibleAllBoxLists() {
        foreach (CheckBoxList cbl in getAllBoxLists())
        {
            cbl.Visible = false;
        }
    }

    private Hashtable getProducts() {
        Hashtable productsInCategories = new Hashtable();
        Hashtable alpakiCategory = new Hashtable();
        alpakiCategory.Add("Tytus samiec 2 lata", 1200);
        alpakiCategory.Add("Romek samiec 1 rok", 600);
        alpakiCategory.Add("Atomek samiec 3 lata", 2000);
        alpakiCategory.Add("Jowita samica 1 rok", 1500);

        Hashtable paszeCategory = new Hashtable();
        paszeCategory.Add("pasza owsiana 5kg", 200);
        paszeCategory.Add("pasza jęczmienna 5kg", 270);
        paszeCategory.Add("pasza żytnia 1kg", 30);
        paszeCategory.Add("pasza pszeniczna 20kg", 530);

        Hashtable szamponyCategory = new Hashtable();
        szamponyCategory.Add("szampon nadający połysk 500ml", 20);
        szamponyCategory.Add("szampon zmiękczający wełnę 200ml", 32);
        szamponyCategory.Add("szampon odżywiający 500ml", 25);
        szamponyCategory.Add("suchy szampon 500ml", 10);

        Hashtable golarkiCategory = new Hashtable();
        golarkiCategory.Add("Philips - AlpacaMaster", 400);
        golarkiCategory.Add("Philips - AlpacaMaster 2", 500);
        golarkiCategory.Add("Braun - AlpacaBarber", 300);
        golarkiCategory.Add("Braun - CottonHandler", 800);

        productsInCategories.Add("alpaki", alpakiCategory);
        productsInCategories.Add("pasze", paszeCategory);
        productsInCategories.Add("szampony", szamponyCategory);
        productsInCategories.Add("golarki", golarkiCategory);

        return productsInCategories;
    }

} // end class Validation
