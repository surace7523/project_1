package java_hotel_management;

import com.mysql.jdbc.jdbc2.optional.MysqlDataSource;
import java.sql.Connection;
import java.sql.SQLException;

import java.util.logging.Logger;




/**
 *
 * @author suresh
 */



public class MY_CONNECTION {
    
    
   
    // connectiuon with the mysql database
    
 public Connection createConnection() throws SQLException{
    
        Connection connection = null;
        
       MysqlDataSource mds = new MysqlDataSource();
        
        mds.setServerName("localhost");
        mds.setPortNumber(3306);
        mds.setUser("root");
        mds.setPassword("");
        mds.setDatabaseName("java_Hotel_Management");
        
        connection = mds.getConnection();
        return connection;
    
    }   
}
