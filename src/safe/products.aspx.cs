using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Collections;
using System.Text;
using System.Collections.Specialized;

public partial class src_confirm : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void submitButton_Click(object sender, EventArgs e)
    {

        ListDictionary insertParameters = new ListDictionary();
               
        insertParameters.Add("date", dateTextBox.Text);
        insertParameters.Add("header", headerTextBox.Text);
        insertParameters.Add("description", descriptionTextBox.Text);
         
        productsLinqDataSource.Insert(insertParameters);

        GridView1.DataBind();

        dateTextBox.Text = String.Empty;
        headerTextBox.Text = String.Empty;
        descriptionTextBox.Text = String.Empty;
    }
    protected void clearButton_Click(object sender, EventArgs e)
    {
        dateTextBox.Text = String.Empty;
        headerTextBox.Text = String.Empty;
        descriptionTextBox.Text = String.Empty;
    } 

}