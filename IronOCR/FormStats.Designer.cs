
namespace IronOCR
{
    partial class FormStats
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FormStats));
            this.dgvStats = new System.Windows.Forms.DataGridView();
            this.panel1 = new System.Windows.Forms.Panel();
            this.cbDetail = new System.Windows.Forms.ComboBox();
            this.btnResult = new System.Windows.Forms.Button();
            this.cbFilter = new System.Windows.Forms.ComboBox();
            this.panel2 = new System.Windows.Forms.Panel();
            this.dgvResult = new System.Windows.Forms.DataGridView();
            ((System.ComponentModel.ISupportInitialize)(this.dgvStats)).BeginInit();
            this.panel1.SuspendLayout();
            this.panel2.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgvResult)).BeginInit();
            this.SuspendLayout();
            // 
            // dgvStats
            // 
            this.dgvStats.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgvStats.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvStats.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.dgvStats.Location = new System.Drawing.Point(0, 60);
            this.dgvStats.Name = "dgvStats";
            this.dgvStats.ReadOnly = true;
            this.dgvStats.RowHeadersWidth = 51;
            this.dgvStats.RowTemplate.Height = 24;
            this.dgvStats.Size = new System.Drawing.Size(688, 520);
            this.dgvStats.TabIndex = 0;
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.cbDetail);
            this.panel1.Controls.Add(this.btnResult);
            this.panel1.Controls.Add(this.cbFilter);
            this.panel1.Controls.Add(this.dgvStats);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Left;
            this.panel1.Location = new System.Drawing.Point(0, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(688, 580);
            this.panel1.TabIndex = 1;
            // 
            // cbDetail
            // 
            this.cbDetail.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbDetail.FormattingEnabled = true;
            this.cbDetail.Location = new System.Drawing.Point(225, 13);
            this.cbDetail.Name = "cbDetail";
            this.cbDetail.Size = new System.Drawing.Size(196, 36);
            this.cbDetail.TabIndex = 3;
            this.cbDetail.SelectedValueChanged += new System.EventHandler(this.cbDetail_SelectedValueChanged);
            // 
            // btnResult
            // 
            this.btnResult.BackColor = System.Drawing.Color.LightSeaGreen;
            this.btnResult.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnResult.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnResult.ForeColor = System.Drawing.Color.White;
            this.btnResult.Location = new System.Drawing.Point(441, 7);
            this.btnResult.Name = "btnResult";
            this.btnResult.Size = new System.Drawing.Size(182, 46);
            this.btnResult.TabIndex = 2;
            this.btnResult.Text = "Result";
            this.btnResult.UseVisualStyleBackColor = false;
            this.btnResult.Click += new System.EventHandler(this.btnResult_Click);
            // 
            // cbFilter
            // 
            this.cbFilter.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbFilter.FormattingEnabled = true;
            this.cbFilter.Items.AddRange(new object[] {
            "Day ",
            "Month",
            "Year"});
            this.cbFilter.Location = new System.Drawing.Point(13, 13);
            this.cbFilter.Name = "cbFilter";
            this.cbFilter.Size = new System.Drawing.Size(196, 36);
            this.cbFilter.TabIndex = 1;
            this.cbFilter.SelectedValueChanged += new System.EventHandler(this.cbFilter_SelectedValueChanged);
            // 
            // panel2
            // 
            this.panel2.Controls.Add(this.dgvResult);
            this.panel2.Dock = System.Windows.Forms.DockStyle.Fill;
            this.panel2.Location = new System.Drawing.Point(688, 0);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(293, 580);
            this.panel2.TabIndex = 2;
            // 
            // dgvResult
            // 
            this.dgvResult.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgvResult.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvResult.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.dgvResult.Location = new System.Drawing.Point(0, 60);
            this.dgvResult.Name = "dgvResult";
            this.dgvResult.ReadOnly = true;
            this.dgvResult.RowHeadersWidth = 51;
            this.dgvResult.RowTemplate.Height = 24;
            this.dgvResult.Size = new System.Drawing.Size(293, 520);
            this.dgvResult.TabIndex = 0;
            // 
            // FormStats
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(981, 580);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.panel1);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "FormStats";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "FormStats";
            ((System.ComponentModel.ISupportInitialize)(this.dgvStats)).EndInit();
            this.panel1.ResumeLayout(false);
            this.panel2.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.dgvResult)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.DataGridView dgvStats;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.ComboBox cbFilter;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Button btnResult;
        private System.Windows.Forms.DataGridView dgvResult;
        private System.Windows.Forms.ComboBox cbDetail;
    }
}