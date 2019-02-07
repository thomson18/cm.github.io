import java.io.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class Getdata extends HttpServlet{
public void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException
    {
        res.setContentType("text/html");
        PrintWriter pw = res.getWriter();
        try{
           Class.forName("oracle.jdbc.driver.OracleDriver");  
            Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","system","tiger");
			Statement st = con.createStatement();
			ResultSet rs=st.executeQuery("select * from Ucredits");  
            pw.println("SNo"+ " Name" +" Email" + "Credits");
        while(rs.next()){
            pw.println(rs.getInt(1)+" "+rs.getString(2) + " " + rs.getString(3) + " "+ rs.getInt(4));
            }
        }
        catch (Exception e){
  pw.println(e);
            }
       }
    }
