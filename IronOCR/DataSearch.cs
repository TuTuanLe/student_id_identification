using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace IronOCR
{
    public partial class DataSearch : Form
    {
        public static DataTable dt2 = new DataTable();
        public DataSearch()
        {
            InitializeComponent();
            //dgv2.Columns.Clear();
            //Add a DataGridViewImageColumn to display the 
            DataGridViewImageColumn img1 = new DataGridViewImageColumn();
            dgv2.DataSource = this.database1DataSet.Student;
            img1.Name = "Image";
            this.dgv2.Columns.Add(img1);
            this.dgv2.CellFormatting += new DataGridViewCellFormattingEventHandler(dataGridView2_CellFormatting);
        }

        void dataGridView2_CellFormatting(object sender, DataGridViewCellFormattingEventArgs f)
        {
            if (f.RowIndex > -1 && f.ColumnIndex == this.dgv2.Columns["Image"].Index)
            {
                if (this.dgv2["id", f.RowIndex].Value != null)
                {
                    string idString1 = this.dgv2["id", f.RowIndex].Value.ToString();
                    f.Value = Image.FromFile(Application.StartupPath + "\\Image\\" + idString1 + ".png");
                }
            }
        }
        private void btnTimKiem_Click(object sender, EventArgs e)
        {
            if (cbbLoaiDuLieu.Text == "ID")
            {
                (dgv2.DataSource as DataTable).DefaultView.RowFilter = "id = '" + txtNhapTimKiem.Text + "'";
                dgv2.Refresh();
            }    
            else if (cbbLoaiDuLieu.Text == "Full Name")
            {
                (dgv2.DataSource as DataTable).DefaultView.RowFilter = "name = '" + txtNhapTimKiem.Text + "'";
                dgv2.Refresh();
            }
            else if (cbbLoaiDuLieu.Text == "Session")
            {
                (dgv2.DataSource as DataTable).DefaultView.RowFilter = "session = '" + txtNhapTimKiem.Text + "'";
                dgv2.Refresh();
            }
            else
            {
                (dgv2.DataSource as DataTable).DefaultView.RowFilter = "department = '" + txtNhapTimKiem.Text + "'";
                dgv2.Refresh();
            }      
        }

        private void Form3_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'database1DataSet.Student' table. You can move, or remove it, as needed.
            this.studentTableAdapter.Fill(this.database1DataSet.Student);

        }
    }
}
