/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java_hotel_management;

import static com.sun.xml.internal.fastinfoset.alphabet.BuiltInRestrictedAlphabets.table;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import static jdk.nashorn.internal.runtime.Debug.id;

/**
 *
 * @author suresh
 */
public class CLIENT {
    MY_CONNECTION my_connection = new MY_CONNECTION();//SQL CONNECTION
    //ALL THE NECESSARY FUNCTION TO ADD DELETE CLEAR NEW CLIENTS
    //TO ADD CLIENT
    public boolean addClient(String fname, String lname, String phone, String email)
    {
    PreparedStatement st;
    ResultSet rs;
    String addQuery = "INSERT INTO `clients`( `first_name`, `last_name`, `phone`, `email`) VALUES (?,?,?,?)";
    
        try {
            st = my_connection.createConnection().prepareStatement(addQuery);
            
            st.setString(1,fname);
            st.setString(2,lname);
            st.setString(3,phone);
            st.setString(4,email);
            
           if(st.executeUpdate() > 0)
           {
           return true;
           }
           else
           {
           return false;
           }
            
        } catch (SQLException ex) {
            Logger.getLogger(CLIENT.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }
    

    }
    
    ///TO EDIT SELKECTED CLIENT
    
    public boolean editClient(int id, String fname, String lname, String phone, String email)
    {
    
    
    PreparedStatement st;
    ResultSet rs;
    String editQuery = "UPDATE `clients` SET `first_name`=?,`last_name`=?,`phone`=?,`email`=? WHERE `id`=?";
    
        try {
            st = my_connection.createConnection().prepareStatement(editQuery);
            
            st.setString(1,fname);
            st.setString(2,lname);
            st.setString(3,phone);
            st.setString(4,email);
            st.setInt(5, id);
            
         
           return(st.executeUpdate()>0);
         
       
           
            
             }
             catch (SQLException ex)
             {
            Logger.getLogger(CLIENT.class.getName()).log(Level.SEVERE, null, ex);
            return false;
              }
    
    
    }
    
    /// TO DELETE CLIENT
    
    public boolean removeClient(int id)
    {
     
    PreparedStatement st;
    ResultSet rs;
    String deleteQuery = "DELETE FROM `clients` WHERE `id`=?";
    
        try {
            st = my_connection.createConnection().prepareStatement(deleteQuery);
            
          
            st.setInt(5, id);
            
         
           return(st.executeUpdate()>0);
         
       
           
            
             }
             catch (SQLException ex)
             {
            Logger.getLogger(CLIENT.class.getName()).log(Level.SEVERE, null, ex);
            return false;
              }
    
    
    }
    //  RETURN THE LIST OF ALL THE  CLIENTS
    
    
    //populate the jtable withe all the clients in dtaabase
    
    
    public void fillClientJTable(JTable table)
    {
    
        PreparedStatement ps;
        ResultSet rs;
        
        String selectQuery = "SELECT * FROM `clients` ";
        try {
            ps = my_connection.createConnection().prepareStatement(selectQuery);
            rs = ps.executeQuery();
            
            DefaultTableModel tableModel;
            tableModel = (DefaultTableModel)table.getModel();
            
            Object[] row;
            while(rs.next())
            {
            row = new Object[5];
            row[0]= rs.getInt(1);
            row[1]= rs.getString(2);
            row[2]= rs.getString(3);
            row[3]= rs.getString(4);
            row[4]= rs.getString(5);
            
            tableModel.addRow(row);
            
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CLIENT.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
            
}
