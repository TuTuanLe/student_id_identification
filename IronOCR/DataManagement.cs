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

    public partial class DataManagement : Form
    {
        public static DataTable dt1 = new DataTable();

        public DataManagement()
        {
            InitializeComponent();
            DataGridViewImageColumn img = new DataGridViewImageColumn();
            img.Name = "Image";
            this.dgv1.Columns.Add(img);
            this.dgv1.CellFormatting += new DataGridViewCellFormattingEventHandler(dataGridView1_CellFormatting);
            btnChonAnh.BackgroundImage = Image.FromFile(Application.StartupPath + "\\Image\\plus_100px.png");
        }

        void dataGridView1_CellFormatting(object sender, DataGridViewCellFormattingEventArgs e)
        {
            if (e.RowIndex > -1 && e.ColumnIndex == this.dgv1.Columns["Image"].Index)
            {
                if (this.dgv1["id", e.RowIndex].Value != null)
                {
                    string idString = this.dgv1["id", e.RowIndex].Value.ToString();
                    e.Value = Image.FromFile(Application.StartupPath + "\\Image\\" + idString + ".png");
                }
            }
        }
        private void btnThem_Click(object sender, EventArgs e)
        {
            try
            {
                string ten, khoas, khoa, linkImage;
                int ID;
                ID = Convert.ToInt32(txtID.Text);
                ten = txtHoTen.Text;
                khoas = txtKhoas.Text;
                khoa = txtKhoa.Text;
                linkImage = txtLinkAnh.Text;
                string sourceFile = txtLinkAnh.Text;
                string targetFile = Application.StartupPath + "\\Image\\";
                string fileName = txtID.Text + ".png";
                string destFile = System.IO.Path.Combine(targetFile, fileName);
                System.IO.File.Copy(sourceFile, destFile, true);
                studentDataset.Student.AddStudentRow(ID, ten, khoas, khoa);
                studentTableAdapter.Update(this.studentDataset.Student);
                this.studentBindingSource.ResumeBinding();
                this.studentBindingSource.SuspendBinding();
                
                this.dgv1.CellFormatting += new DataGridViewCellFormattingEventHandler(dataGridView1_CellFormatting);
                txtID.Text = "";
                txtHoTen.Text = "";
                txtKhoas.Text = "";
                txtKhoa.Text = "";
                txtLinkAnh.Text = "";
            }
            catch { MessageBox.Show("Dữ liệu nhập vào có lỗi !!!"); };
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            this.studentTableAdapter.Fill(this.studentDataset.Student);

        }

        private void btnChonAnh_Click_1(object sender, EventArgs e)
        {
            OpenFileDialog dlgOpen = new OpenFileDialog();
            dlgOpen.Filter = "PNG( *.png) |* .png|Bitmap( *.bmp)|* .bmp|Allfiles( *.* ) |  *.*";
            dlgOpen.Title = "Chọn ảnh";
            if (dlgOpen.ShowDialog() == System.Windows.Forms.DialogResult.OK)
            {
                btnChonAnh.BackgroundImage = Image.FromFile(dlgOpen.FileName);
            }
            txtLinkAnh.Text = dlgOpen.FileName;
        }
    }
}
