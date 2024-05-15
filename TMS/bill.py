import sys
import fpdf
import mariadb


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
    pdf.set_auto_page_break(auto=True, margin=15)

    # Set font
    pdf.set_font("Arial", size=12)

    # Title
    pdf.cell(200, 10, txt="Bill", ln=True, align="C")
    pdf.ln(10)  # Add space after title

    # User Information
    pdf.set_fill_color(200, 220, 255)  # Light blue background
    pdf.cell(0, 10, txt="User Information:", ln=True, fill=True)
    pdf.cell(0, 10, txt=f"User ID: {user_id}", ln=True)
    if user_data:
        pdf.cell(0, 10, txt=f"Name: {user_data[1]}", ln=True)
        pdf.cell(0, 10, txt=f"Email: {user_data[4]}", ln=True)
        pdf.cell(0, 10, txt=f"Address: {user_data[5]}", ln=True)
    pdf.ln(5)  # Add space after user information

    # Package Information
    pdf.set_fill_color(200, 220, 255)  # Light blue background
    pdf.cell(0, 10, txt="Package Information:", ln=True, fill=True)
    pdf.cell(0, 10, txt=f"Package ID: {pkgid}", ln=True)
    if package_data:
        pdf.cell(0, 10, txt=f"Package Name: {package_data[1]}", ln=True)
        pdf.cell(0, 10, txt=f"Location: {package_data[3]}", ln=True)
        pdf.cell(0, 10, txt=f"Price: ${package_data[4]}", ln=True)
    pdf.ln(5)  # Add space after package information

    # Dates
    pdf.cell(0, 10, txt=f"From: {fromdate}", ln=True)
    pdf.cell(0, 10, txt=f"To: {todate}", ln=True)
    pdf.ln(5)  # Add space after dates

    # Additional Comments
    pdf.cell(0, 10, txt=f"Comments: {comment}", ln=True)
    pdf.ln(5)  # Add space after comments

    # Total
    pdf.cell(0, 10, txt=f"Total: ${total}", ln=True)
    pdf.ln(10)  # Add space after total

    # Save the PDF
    path = f"C:/xampp/htdocs/onlinetourism/TMS/bill_{user_id}.pdf"
    pdf.output(path)

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
