import sys
import fpdf
import mariadb
import os


def generate_bill(pkgid, user_id, fromdate, todate, comment, total):
    # Connect to MariaDB
    conn = mariadb.connect(
        host="MSHOME",
        user="username",
        password="password",
        database="dbms",
        port=3304
    )

    cursor = conn.cursor()

    # Fetch user details
    cursor.execute("SELECT * FROM `user` WHERE `User_Id` = %s", (user_id,))
    user_data = cursor.fetchone()

    # Fetch package details
    cursor.execute("SELECT * FROM `tbltourpackages` WHERE `PackageId` = %s", (pkgid,))
    package_data = cursor.fetchone()

    # Initialize PDF
    pdf = fpdf.FPDF(format='letter')
    pdf.add_page()

    # Set font
    pdf.set_font("Arial", size=12)

    # Title
    pdf.set_text_color(56, 87, 245)  # Blue color
    pdf.set_font("Arial", style='B', size=20)
    pdf.cell(200, 10, txt="Invoice", ln=True, align="C")
    pdf.ln(10)  # Add space after title

    # User Information Table
    pdf.set_fill_color(244, 244, 244)  # Light gray background
    pdf.set_text_color(0, 0, 0)  # Black color
    pdf.set_font("Arial", style='B', size=14)
    pdf.cell(0, 10, txt="User Information", ln=True, fill=True)
    pdf.set_font("Arial", size=12)
    pdf.cell(70, 10, txt="User ID:", border=1)
    pdf.cell(0, 10, txt=f"{user_id}", ln=True, border=1)
    if user_data:
        pdf.cell(70, 10, txt="Name:", border=1)
        pdf.cell(0, 10, txt=f"{user_data[1]}", ln=True, border=1)
        pdf.cell(70, 10, txt="Email:", border=1)
        pdf.cell(0, 10, txt=f"{user_data[4]}", ln=True, border=1)
        pdf.cell(70, 10, txt="Address:", border=1)
        pdf.cell(0, 10, txt=f"{user_data[5]}", ln=True, border=1)
    pdf.ln(10)  # Add space after user information

    # Package Information Table
    pdf.set_fill_color(244, 244, 244)  # Light gray background
    pdf.set_font("Arial", style='B', size=14)
    pdf.cell(0, 10, txt="Package Information", ln=True, fill=True)
    pdf.set_font("Arial", size=12)
    pdf.cell(70, 10, txt="Package ID:", border=1)
    pdf.cell(0, 10, txt=f"{pkgid}", ln=True, border=1)
    if package_data:
        pdf.cell(70, 10, txt="Package Name:", border=1)
        pdf.cell(0, 10, txt=f"{package_data[1]}", ln=True, border=1)
        pdf.cell(70, 10, txt="Location:", border=1)
        pdf.cell(0, 10, txt=f"{package_data[3]}", ln=True, border=1)
        pdf.cell(70, 10, txt="Price:", border=1)
        pdf.cell(0, 10, txt=f"INR {package_data[4]}", ln=True, border=1)
    pdf.ln(10)  # Add space after package information

    # Dates Table
    pdf.cell(70, 10, txt="From:", border=1)
    pdf.cell(0, 10, txt=f"{fromdate}", ln=True, border=1)
    pdf.cell(70, 10, txt="To:", border=1)
    pdf.cell(0, 10, txt=f"{todate}", ln=True, border=1)
    pdf.ln(10)  # Add space after dates

    # Additional Comments Table
    pdf.cell(0, 10, txt="Additional Comments", ln=True, fill=True)
    pdf.cell(0, 10, txt=f"{comment}", ln=True, border=1)
    pdf.ln(10)  # Add space after comments

    # Total
    pdf.set_font("Arial", style='B', size=16)
    pdf.cell(70, 10, txt="Total:", border=1)
    pdf.cell(0, 10, txt=f"INR {total}", ln=True, border=1)
    pdf.ln(10)  # Add space after total

    # Save the PDF
    path = f"C:/xampp/htdocs/onlinetourism/TMS/bill_{user_id}.pdf"
    pdf.output(path)

    os.startfile(path)

    # Close connections
    cursor.close()
    conn.close()

    print("Bill generated successfully!")


def main():
    # Extracting arguments from the shell script
    pkgid = int(sys.argv[1])
    user_id = str(sys.argv[2])
    fromdate = str(sys.argv[3])
    todate = str(sys.argv[4])
    comment = str(sys.argv[5])
    total = int(sys.argv[6])

    print("Generating Bill...")
    generate_bill(pkgid, user_id, fromdate, todate, comment, total)


if __name__ == "__main__":
    main()