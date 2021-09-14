using Microsoft.Reporting.WinForms;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace IronOCR
{
    public partial class FormPrint : Form
    {
        string _imageUrl;
        public FormPrint(string imageUrl)
        {
            InitializeComponent();
            _imageUrl = imageUrl;
        }

        private void FormPrint_Load(object sender, EventArgs e)
        {
            FileInfo fi = new FileInfo(_imageUrl);
            ReportParameter imageURL = new ReportParameter("imageURL", new Uri(_imageUrl).AbsoluteUri);
            this.reportViewer1.LocalReport.EnableExternalImages = true;
            this.reportViewer1.LocalReport.SetParameters(new ReportParameter[] { imageURL });
            this.reportViewer1.RefreshReport();

        }
    }
}
