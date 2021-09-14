namespace IronOCR
{
    partial class FormMain
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FormMain));
            this.btnStart = new System.Windows.Forms.Button();
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.btnCapture = new System.Windows.Forms.Button();
            this.pnlAppearances = new System.Windows.Forms.Panel();
            this.dgvAppearances = new System.Windows.Forms.DataGridView();
            this.btnPrint = new System.Windows.Forms.Button();
            this.btnStats = new System.Windows.Forms.Button();
            this.btnDataManagement = new System.Windows.Forms.Button();
            this.btnDataSearch = new System.Windows.Forms.Button();
            this.pnlTheSinhVien = new System.Windows.Forms.Panel();
            this.lbMSSV = new System.Windows.Forms.Label();
            this.ptbAnhSinhVien = new System.Windows.Forms.PictureBox();
            this.lbKhoa = new System.Windows.Forms.Label();
            this.lbKhoas = new System.Windows.Forms.Label();
            this.lbTenSinhVien = new System.Windows.Forms.Label();
            this.ptbKhungCamera = new System.Windows.Forms.PictureBox();
            this.pnlAppearances.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgvAppearances)).BeginInit();
            this.pnlTheSinhVien.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.ptbAnhSinhVien)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptbKhungCamera)).BeginInit();
            this.SuspendLayout();
            // 
            // btnStart
            // 
            this.btnStart.BackColor = System.Drawing.Color.DarkGreen;
            this.btnStart.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnStart.Font = new System.Drawing.Font("Segoe UI", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnStart.ForeColor = System.Drawing.Color.White;
            this.btnStart.Location = new System.Drawing.Point(13, 46);
            this.btnStart.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.btnStart.Name = "btnStart";
            this.btnStart.Size = new System.Drawing.Size(149, 58);
            this.btnStart.TabIndex = 4;
            this.btnStart.Text = "Start";
            this.btnStart.UseVisualStyleBackColor = false;
            this.btnStart.Click += new System.EventHandler(this.btnStart_Click);
            // 
            // btnCapture
            // 
            this.btnCapture.BackColor = System.Drawing.Color.Maroon;
            this.btnCapture.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnCapture.Font = new System.Drawing.Font("Segoe UI", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCapture.ForeColor = System.Drawing.Color.White;
            this.btnCapture.Location = new System.Drawing.Point(195, 46);
            this.btnCapture.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.btnCapture.Name = "btnCapture";
            this.btnCapture.Size = new System.Drawing.Size(149, 58);
            this.btnCapture.TabIndex = 5;
            this.btnCapture.Text = "Capture";
            this.btnCapture.UseVisualStyleBackColor = false;
            this.btnCapture.Click += new System.EventHandler(this.btnCapture_Click);
            // 
            // pnlAppearances
            // 
            this.pnlAppearances.Controls.Add(this.dgvAppearances);
            this.pnlAppearances.Location = new System.Drawing.Point(676, 118);
            this.pnlAppearances.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.pnlAppearances.Name = "pnlAppearances";
            this.pnlAppearances.Size = new System.Drawing.Size(543, 299);
            this.pnlAppearances.TabIndex = 12;
            // 
            // dgvAppearances
            // 
            this.dgvAppearances.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgvAppearances.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvAppearances.Dock = System.Windows.Forms.DockStyle.Fill;
            this.dgvAppearances.Location = new System.Drawing.Point(0, 0);
            this.dgvAppearances.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.dgvAppearances.Name = "dgvAppearances";
            this.dgvAppearances.RowHeadersWidth = 51;
            this.dgvAppearances.RowTemplate.Height = 24;
            this.dgvAppearances.Size = new System.Drawing.Size(543, 299);
            this.dgvAppearances.TabIndex = 0;
            // 
            // btnPrint
            // 
            this.btnPrint.BackColor = System.Drawing.Color.Purple;
            this.btnPrint.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnPrint.Font = new System.Drawing.Font("Segoe UI", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnPrint.ForeColor = System.Drawing.Color.White;
            this.btnPrint.Location = new System.Drawing.Point(382, 46);
            this.btnPrint.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.btnPrint.Name = "btnPrint";
            this.btnPrint.Size = new System.Drawing.Size(149, 58);
            this.btnPrint.TabIndex = 14;
            this.btnPrint.Text = "Print";
            this.btnPrint.UseVisualStyleBackColor = false;
            this.btnPrint.Click += new System.EventHandler(this.btnPrint_Click);
            // 
            // btnStats
            // 
            this.btnStats.BackColor = System.Drawing.Color.DarkCyan;
            this.btnStats.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnStats.Font = new System.Drawing.Font("Segoe UI", 16.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnStats.ForeColor = System.Drawing.Color.White;
            this.btnStats.Location = new System.Drawing.Point(676, 46);
            this.btnStats.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.btnStats.Name = "btnStats";
            this.btnStats.Size = new System.Drawing.Size(149, 58);
            this.btnStats.TabIndex = 15;
            this.btnStats.Text = "Stats";
            this.btnStats.UseVisualStyleBackColor = false;
            this.btnStats.Click += new System.EventHandler(this.btnStats_Click);
            // 
            // btnDataManagement
            // 
            this.btnDataManagement.BackColor = System.Drawing.Color.DarkCyan;
            this.btnDataManagement.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnDataManagement.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnDataManagement.ForeColor = System.Drawing.Color.White;
            this.btnDataManagement.Location = new System.Drawing.Point(872, 46);
            this.btnDataManagement.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.btnDataManagement.Name = "btnDataManagement";
            this.btnDataManagement.Size = new System.Drawing.Size(149, 58);
            this.btnDataManagement.TabIndex = 16;
            this.btnDataManagement.Text = "Data Management";
            this.btnDataManagement.UseVisualStyleBackColor = false;
            this.btnDataManagement.Click += new System.EventHandler(this.btnDataManagement_Click);
            // 
            // btnDataSearch
            // 
            this.btnDataSearch.BackColor = System.Drawing.Color.DarkCyan;
            this.btnDataSearch.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnDataSearch.Font = new System.Drawing.Font("Segoe UI", 10.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnDataSearch.ForeColor = System.Drawing.Color.White;
            this.btnDataSearch.Location = new System.Drawing.Point(1070, 46);
            this.btnDataSearch.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.btnDataSearch.Name = "btnDataSearch";
            this.btnDataSearch.Size = new System.Drawing.Size(149, 58);
            this.btnDataSearch.TabIndex = 17;
            this.btnDataSearch.Text = "Data Search";
            this.btnDataSearch.UseVisualStyleBackColor = false;
            this.btnDataSearch.Click += new System.EventHandler(this.btnDataSearch_Click);
            // 
            // pnlTheSinhVien
            // 
            this.pnlTheSinhVien.BackgroundImage = global::IronOCR.Properties.Resources.khungthesinhvien;
            this.pnlTheSinhVien.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.pnlTheSinhVien.Controls.Add(this.lbMSSV);
            this.pnlTheSinhVien.Controls.Add(this.ptbAnhSinhVien);
            this.pnlTheSinhVien.Controls.Add(this.lbKhoa);
            this.pnlTheSinhVien.Controls.Add(this.lbKhoas);
            this.pnlTheSinhVien.Controls.Add(this.lbTenSinhVien);
            this.pnlTheSinhVien.Location = new System.Drawing.Point(676, 425);
            this.pnlTheSinhVien.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.pnlTheSinhVien.Name = "pnlTheSinhVien";
            this.pnlTheSinhVien.Size = new System.Drawing.Size(543, 299);
            this.pnlTheSinhVien.TabIndex = 11;
            // 
            // lbMSSV
            // 
            this.lbMSSV.BackColor = System.Drawing.Color.Transparent;
            this.lbMSSV.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbMSSV.Location = new System.Drawing.Point(13, 254);
            this.lbMSSV.Name = "lbMSSV";
            this.lbMSSV.Size = new System.Drawing.Size(109, 27);
            this.lbMSSV.TabIndex = 15;
            this.lbMSSV.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // ptbAnhSinhVien
            // 
            this.ptbAnhSinhVien.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.ptbAnhSinhVien.Location = new System.Drawing.Point(13, 103);
            this.ptbAnhSinhVien.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.ptbAnhSinhVien.Name = "ptbAnhSinhVien";
            this.ptbAnhSinhVien.Size = new System.Drawing.Size(109, 150);
            this.ptbAnhSinhVien.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptbAnhSinhVien.TabIndex = 6;
            this.ptbAnhSinhVien.TabStop = false;
            // 
            // lbKhoa
            // 
            this.lbKhoa.BackColor = System.Drawing.Color.Transparent;
            this.lbKhoa.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbKhoa.Location = new System.Drawing.Point(123, 202);
            this.lbKhoa.Name = "lbKhoa";
            this.lbKhoa.Size = new System.Drawing.Size(368, 34);
            this.lbKhoa.TabIndex = 14;
            this.lbKhoa.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lbKhoas
            // 
            this.lbKhoas.BackColor = System.Drawing.Color.Transparent;
            this.lbKhoas.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbKhoas.Location = new System.Drawing.Point(123, 175);
            this.lbKhoas.Name = "lbKhoas";
            this.lbKhoas.Size = new System.Drawing.Size(368, 34);
            this.lbKhoas.TabIndex = 13;
            this.lbKhoas.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lbTenSinhVien
            // 
            this.lbTenSinhVien.BackColor = System.Drawing.Color.Transparent;
            this.lbTenSinhVien.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbTenSinhVien.Location = new System.Drawing.Point(123, 134);
            this.lbTenSinhVien.Name = "lbTenSinhVien";
            this.lbTenSinhVien.Size = new System.Drawing.Size(368, 34);
            this.lbTenSinhVien.TabIndex = 12;
            this.lbTenSinhVien.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // ptbKhungCamera
            // 
            this.ptbKhungCamera.Location = new System.Drawing.Point(13, 118);
            this.ptbKhungCamera.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.ptbKhungCamera.Name = "ptbKhungCamera";
            this.ptbKhungCamera.Size = new System.Drawing.Size(644, 606);
            this.ptbKhungCamera.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptbKhungCamera.TabIndex = 1;
            this.ptbKhungCamera.TabStop = false;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.White;
            this.ClientSize = new System.Drawing.Size(1245, 732);
            this.Controls.Add(this.btnDataSearch);
            this.Controls.Add(this.btnDataManagement);
            this.Controls.Add(this.btnStats);
            this.Controls.Add(this.btnPrint);
            this.Controls.Add(this.pnlAppearances);
            this.Controls.Add(this.pnlTheSinhVien);
            this.Controls.Add(this.btnCapture);
            this.Controls.Add(this.btnStart);
            this.Controls.Add(this.ptbKhungCamera);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Margin = new System.Windows.Forms.Padding(3, 2, 3, 2);
            this.MaximizeBox = false;
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Student Identification";
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.Form1_FormClosing);
            this.Load += new System.EventHandler(this.Form1_Load);
            this.pnlAppearances.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.dgvAppearances)).EndInit();
            this.pnlTheSinhVien.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.ptbAnhSinhVien)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptbKhungCamera)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.PictureBox ptbKhungCamera;
        private System.Windows.Forms.Button btnStart;
        private System.Windows.Forms.Timer timer1;
        private System.Windows.Forms.Button btnCapture;
        private System.Windows.Forms.PictureBox ptbAnhSinhVien;
        private System.Windows.Forms.Panel pnlTheSinhVien;
        private System.Windows.Forms.Label lbMSSV;
        private System.Windows.Forms.Label lbKhoa;
        private System.Windows.Forms.Label lbKhoas;
        private System.Windows.Forms.Label lbTenSinhVien;
        private System.Windows.Forms.Panel pnlAppearances;
        private System.Windows.Forms.DataGridView dgvAppearances;
        private System.Windows.Forms.Button btnPrint;
        private System.Windows.Forms.Button btnStats;
        private System.Windows.Forms.Button btnDataManagement;
        private System.Windows.Forms.Button btnDataSearch;
    }
}

