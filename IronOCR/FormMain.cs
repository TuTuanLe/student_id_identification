using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

using Tesseract;

using AForge.Video;
using AForge.Video.DirectShow;

using Emgu.CV;
using Emgu.CV.Structure;
using Emgu.CV.CvEnum;
using Emgu.Util;

using System.Collections;

namespace IronOCR
{
    public partial class FormMain : Form
    {
        DataTable dt = new DataTable();
        public FormMain()
        {
            InitializeComponent();
            dgvAppearances.Columns.Clear();
            dt.Columns.Add("ID", typeof(string));
            dt.Columns.Add("Full Name", typeof(string));
            dt.Columns.Add("Appearences", typeof(string));
            createData();
        }

        Hashtable data = new Hashtable();
        private void createData()
        {
            data.Add("17520265", "17520265*Lê Phạm Thiên Bằng*Khoá 2017*Khoa học Máy tính(CLC)*");
            data.Add("17520400", "17520400*Nguyễn Hoàng Minh Duy*Khóa 2017*Khoa học Máy tính(CLC)*");
            data.Add("17520521", "17520521*Trần Quốc Hoàng*Khóa 2017*Hệ thống Thông tin(CLC)*");
            data.Add("17520835", "17520835*Đặng Minh Nhã*Khóa 2017*Kỹ thuật Máy tính(CLC)*");
            data.Add("17520878", "17520878*Nguyễn Tấn Phát*Khóa 2017*Khoa học Máy tính(CLC)*");
            data.Add("17521026", "17521026*Nguyễn Huỳnh Thạch*Khóa 2017*Khoa học Máy tính(CLC)*");
            data.Add("18520140", "18520140*Huỳnh Phan Minh Quang*Khóa 2018*Công nghệ Thông Tin(CLC)*");
            data.Add("18520311", "18520311*Đặng Hoàng Minh*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18520461", "18520461*Nguyễn Thị Lan Anh*Khóa 2018*MMT & TT Dữ Liệu(CLC)*");
            data.Add("18520502", "18520502*Võ Gia Bảo*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18520689", "18520689*Nguyễn Đức Hà*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18520751", "18520751*Nguyễn Trung Hiếu*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18520765", "18520765*Phạm Trung Hoà*Khóa 2018*MMT & TT Dữ Liệu(CLC)*");
            data.Add("18520966", "18520966*Nguyễn Hồng Lạc*Khóa 2018*MMT & TT Dữ Liệu(CLC)*");
            data.Add("18521075", "18521075*Bùi Minh Lý*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521253", "18521253*Lê Trương Hoàng Phúc*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521299", "18521299*Nguyễn Minh Quang*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521304", "18521304*Vũ Minh Quang*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521349", "18521349*Nguyễn Minh Sơn*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521356", "18521356*Phạm Tiến Sỹ*Khóa 2018*Hệ thống Thông tin(CLC)*");
            data.Add("18521503", "18521503*Đặng Hữu Toàn*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521516", "18521516*Hồ Ngọc Tôn*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521536", "18521536*Lê Anh Triều*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521559", "18521559*Phan Nguyễn An Trung*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521598", "18521598*Lê Tử Tuấn*Khóa 2018*Hệ thống Thông tin(CLC)*");
            data.Add("18521603", "18521603*Nguyễn Nhật Tuấn*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521632", "18521632*Nguyễn Văn*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("17521263", "17521263*Nguyễn Khánh Vinh*Khóa 2017*Khoa học Máy tính(CLC)*");
            data.Add("17521187", "17521187*Nguyễn Trí Trường*Khóa 2017*Kỹ thuật Phần mềm(CLC)*");
            data.Add("17521269", "17521269*Lê Anh Vũ*Khóa 2017*Kỹ thuật Phần mềm(CLC)*");
            data.Add("18521351", "18521351*Trần Hoàng Sơn*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521448", "18521448*Nguyễn Văn Thịnh*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521427", "18521427*Nguyễn Hoàng Thiên*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521302", "18521302*Nguyễn Tuấn Quang*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521283", "18521283*Đỗ Mạnh Quân*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521256", "18521256*Nguyễn Hoàng Phúc*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521255", "18521255*Nguyễn Duy Phúc*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521447", "18521447*Nguyễn Trường Thịnh*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521571", "18521571*Phạm Ngọc Trường*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18521653", "18521653*Nguyễn Kiều Vinh*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("18520738", "18520738*Lê Trung Hiếu*Khóa 2018*Khoa học Máy tính(CLC)*");
            data.Add("19521675", "19521675*Ðỗ Hoàng Mai Khanh*Khóa 2019*MMT&TT Dữ Liệu (CLC)*");
            data.Add("19520666", "19520666*Nguyễn Anh Kiệt*Khóa 2019*Kỹ thuật Phần mềm (CLC)*");
            data.Add("19521800", "19521800*Thân Trọng Hoàng Long*Khóa 2019*MMT&TT Dữ Liệu (CLC)*");
            data.Add("17520710", "17520710*Lê Ngọc Long*Khóa 2017*Hệ thống Thông tin (CLC)*");
            data.Add("19520834", "19520834*Ngô Văn Phóng*Khóa 2019*Khoa học Máy tính(CLC)*");
        }

        private void btnStart_Click(object sender, EventArgs e)
        {
            ptbKhungCamera.Image = null;
            captureDevice = new VideoCaptureDevice(filterInfoCollection[0].MonikerString);
            captureDevice.NewFrame += CaptureDevice_NewFrame;
            captureDevice.Start();
            timer1.Start();
        }

        private void btnCapture_Click(object sender, EventArgs e)
        {
            Bitmap newImage = (Bitmap)ptbKhungCamera.Image.Clone();
            ptbKhungCamera.Image = newImage;
            timer1.Stop();
            if (captureDevice.IsRunning)
            {
                captureDevice.Stop();
            }
            string result = "";
            result = OCR(newImage);
            if (result != null)
            {
                if (result.Contains("52"))
                {
                    int index = result.IndexOf("52");
                    string id = result.Substring(index - 2, 8);
                    string info = data[id].ToString();
                    if (info != null)
                    {
                        getDetail(info);
                    }
                    else
                    {
                        handleException("Can not identify!!! Exception");
                        return;
                    }
                }
                else
                {
                    handleException("Can not identify!!! Exception");
                    return;
                }
            }
        }

        private void handleException(string a)
        {
            if (MessageBox.Show(a + " \n Try Again !!!") == DialogResult.OK)
            {
                ptbKhungCamera.Image = null;
                captureDevice = new VideoCaptureDevice(filterInfoCollection[0].MonikerString);
                captureDevice.NewFrame += CaptureDevice_NewFrame;
                captureDevice.Start();
                timer1.Start();
            }
        }

        List<string> listDetail;
        private void getDetail(string info)
        {
            listDetail = new List<string>();
            int begin = 0;
            int end = -1;
            for (int i = 0; i < info.Length; i++)
            {
                if (info[i] == '*')
                {
                    begin = end + 1;
                    end = i;
                    listDetail.Add(info.Substring(begin, end - begin));
                }
            }
            lbMSSV.Text = listDetail[0].ToString();
            lbTenSinhVien.Text = listDetail[1].ToString().ToUpper();
            lbKhoas.Text = listDetail[2].ToString();
            lbKhoa.Text = listDetail[3].ToString();
            ptbAnhSinhVien.Image = new Bitmap(Application.StartupPath + "\\Image\\" + lbMSSV.Text + ".png");
            isExist(lbMSSV.Text);

            using (var bmp = new Bitmap(pnlTheSinhVien.Width, pnlTheSinhVien.Height))
            {
                pnlTheSinhVien.DrawToBitmap(bmp, new Rectangle(0, 0, bmp.Width, bmp.Height));
                bmp.Save(@"Card/" + lbMSSV.Text + ".bmp");
            }
        }

        private void isExist(string id)
        {
            bool check = false;
            for (int i = 0; i < dt.Rows.Count; i++)
            {
                string iD = dgvAppearances.Rows[i].Cells[0].Value.ToString();
                //MessageBox.Show(iD);
                if (String.Equals(iD, id))
                {
                    check = true;
                    int temp = Convert.ToInt32(dgvAppearances.Rows[i].Cells[2].Value.ToString());
                    dgvAppearances.Rows[i].Cells[2].Value = (temp + 1).ToString();
                    break;
                }
            }
            if (!check)
            {
                dt.Rows.Add(lbMSSV.Text, lbTenSinhVien.Text, 1);
            }
            dgvAppearances.DataSource = dt;
        }

        private string OCR(Bitmap b)
        {
            string res = "";
            try
            {
                using (var engine = new TesseractEngine(@"tessdata", "vie", EngineMode.Default))
                {
                    using (var page = engine.Process(b, PageSegMode.AutoOnly))

                        res = page.GetText();
                }
            }
            catch { }
            return res;
        }

        FilterInfoCollection filterInfoCollection;
        VideoCaptureDevice captureDevice;

        private void Form1_Load(object sender, EventArgs e)
        {
            filterInfoCollection = new FilterInfoCollection(FilterCategory.VideoInputDevice);
        }

        private void CaptureDevice_NewFrame(object sender, NewFrameEventArgs eventArgs)
        {
            ptbKhungCamera.Image = (Bitmap)eventArgs.Frame.Clone();
        }

        private void Form1_FormClosing(object sender, FormClosingEventArgs e)
        {
            if (captureDevice.IsRunning)
            {
                captureDevice.Stop();
            }
        }
        string imageURL = null;
        private void btnPrint_Click(object sender, EventArgs e)
        {
            imageURL = Application.StartupPath + "\\Card\\" + lbMSSV.Text + ".bmp";
            if (!string.IsNullOrEmpty(imageURL))
            {
                using (FormPrint frm = new FormPrint(imageURL))
                {
                    frm.ShowDialog();
                }
            }
        }

        private void btnStats_Click(object sender, EventArgs e)
        {
            FormStats frm = new FormStats();
            frm.ShowDialog();
        }

        private void btnDataManagement_Click(object sender, EventArgs e)
        {
            DataManagement frm = new DataManagement();
            frm.ShowDialog();
        }

        private void btnDataSearch_Click(object sender, EventArgs e)
        {
            DataSearch frm = new DataSearch();
            frm.ShowDialog();
        }
    }
}
