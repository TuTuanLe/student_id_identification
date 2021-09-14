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
    public partial class FormStats : Form
    {
        DataTable dt = new DataTable();
        public FormStats()
        {
            InitializeComponent();
            dgvStats.Columns.Clear();
            dt.Columns.Add("ID", typeof(string));
            dt.Columns.Add("Full Name", typeof(string));
            dt.Columns.Add("Appearences", typeof(string));
            dt.Columns.Add("Time", typeof(string));
            createData();

        }

        private void createData()
        {
            dt.Rows.Add("1", "A", 1, "2021-01-04T09:53:06");
            dt.Rows.Add("2", "B", 1, "2021-01-04T09:53:06");
            dt.Rows.Add("1", "A", 1, "2021-01-04T09:53:06");

            dt.Rows.Add("1", "A", 1, "2021-01-05T09:53:06");
            dt.Rows.Add("2", "B", 1, "2021-01-05T09:53:06");
            dt.Rows.Add("2", "B", 1, "2021-01-05T09:53:06");
            dt.Rows.Add("2", "B", 1, "2021-01-05T09:53:06");

            dt.Rows.Add("3", "C", 1, "2021-01-06T09:53:06");
            dt.Rows.Add("3", "C", 1, "2021-01-06T09:53:06");
            dt.Rows.Add("2", "B", 1, "2021-01-06T09:53:06");
            dt.Rows.Add("4", "D", 1, "2021-01-06T09:53:06");

            dt.Rows.Add("3", "C", 1, "2021-02-06T09:53:06");
            dt.Rows.Add("4", "D", 1, "2021-02-07T09:53:06");
            dt.Rows.Add("4", "D", 1, "2021-02-08T09:53:06");
            dt.Rows.Add("1", "A", 1, "2021-02-08T09:53:06");
            dt.Rows.Add("4", "D", 1, "2021-02-09T09:53:06");

            dt.Rows.Add("3", "C", 1, "2021-03-06T09:53:06");
            dt.Rows.Add("3", "C", 1, "2021-03-06T09:53:06");
            dt.Rows.Add("2", "B", 1, "2021-03-07T09:53:06");
            dt.Rows.Add("1", "A", 1, "2021-03-07T09:53:06");
            dt.Rows.Add("2", "B", 1, "2021-03-07T09:53:06");
            dt.Rows.Add("3", "C", 1, "2021-03-08T09:53:06");

            dgvStats.DataSource = dt;
        }

        List<string> listDay;
        List<string> listMonth;
        List<string> listYear = new List<string>();
        private void cbFilter_SelectedValueChanged(object sender, EventArgs e)
        {

            ComboBox cb = sender as ComboBox;
            if (cb.SelectedItem != null)
            {
                switch (cb.SelectedItem.ToString().Trim())
                {
                    case "Day":
                        listDay = new List<string>();
                        cbDetail.DataSource = getList(0, 10);
                        break;
                    case "Month":
                        listMonth = new List<string>();
                        cbDetail.DataSource = getList(0, 7);
                        break;
                    case "Year":
                        listYear = new List<string>();
                        cbDetail.DataSource = getList(0, 4);
                        break;
                }
            }
        }

        private List<string> getList(int begin, int end)
        {
            List<string> list = new List<string>();
            list.Add(dgvStats.Rows[0].Cells[3].Value.ToString().Substring(begin, end));
            for (int i = 1; i < dt.Rows.Count; i++)
            {
                string temp = dgvStats.Rows[i].Cells[3].Value.ToString().Substring(begin, end);
                int size = list.Count() - 1;
                if (!list[size].Equals(temp))
                {
                    list.Add(temp);
                }
            }
            return list;
        }

        string valueDetail = null;
        private void cbDetail_SelectedValueChanged(object sender, EventArgs e)
        {
            ComboBox cb = sender as ComboBox;
            if (cb.SelectedValue != null)
            {
                valueDetail = cb.SelectedValue.ToString();
            }
        }

        DataTable dtResult;
        List<string> listId;
        private void btnResult_Click(object sender, EventArgs e)
        {
            dtResult = new DataTable();
            dgvResult.Columns.Clear();
            dtResult.Columns.Add("ID", typeof(string));
            dtResult.Columns.Add("Full Name", typeof(string));
            dtResult.Columns.Add("Apps", typeof(string));
            listId = new List<string>();
            for (int i = 0; i < dt.Rows.Count; i++)
            {
                if (dgvStats.Rows[i].Cells[3].Value.ToString().Contains(valueDetail))
                {
                    string tempID = dgvStats.Rows[i].Cells[0].Value.ToString();
                    string tempName = dgvStats.Rows[i].Cells[1].Value.ToString();
                    int tempIndex = isExist(tempID, listId);

                    if (tempIndex != -1)
                    {
                        int temp = Convert.ToInt32(dgvResult.Rows[tempIndex].Cells[2].Value.ToString());
                        dgvResult.Rows[tempIndex].Cells[2].Value = (temp + 1).ToString();
                        dgvResult.DataSource = dtResult;
                    }
                    else
                    {
                        dtResult.Rows.Add(tempID, tempName, 1);
                        dgvResult.DataSource = dtResult;
                        listId.Add(tempID);
                    }

                }
            }
            dtResult.DefaultView.Sort = "Apps desc";
            dtResult = dtResult.DefaultView.ToTable();
            dgvResult.DataSource = dtResult;

            this.dgvResult.Sort(this.dgvResult.Columns[2], ListSortDirection.Descending);
        }

        private int isExist(string s, List<string> listS)
        {
            for (int i = 0; i < listS.Count; i++)
            {
                if (String.Equals(s, listS[i]))
                {
                    return i;
                }
            }
            return -1;
        }
    }
}
