/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package data;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author Empire Rider
 */
public class getRoute extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");

try (PrintWriter out = response.getWriter()) {

            connection connection = new connection();

            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet getRoute</title>");
            out.println("<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>");
//            out.println("<link rel='stylesheet' type='text/css' href='bootstrap.min.css'>");
            out.println("</head>");
            out.println("<body>");
            out.println("<div class='container-fluid'>");
                out.println("<div class='row'>");
                    out.println("<div class='col-xs-1'>");
                    out.println("</div>");
                    out.println("<div class='col-xs-10'>");
            
            
//                    out.println("</div>");
//                    out.println("<div class='col-xs-1'>");
//                    out.println("</div>");
//                out.println("</div>");
//            out.println("</div>");
            
            
            
            

            String from = request.getParameter("from");
            String to = request.getParameter("to");

            if (from.trim().isEmpty() || to.trim().isEmpty() || to.equalsIgnoreCase(from)) {
                out.println("<h1>Invalid Data</h1>");
                out.println("</div>"); //col xs 10
                out.println("<div class='col-xs-1'>");
                out.println("</div>"); //col xs 1
                out.println("</div>"); //row
                out.println("</div>"); //container
                out.println("</body>");
                out.println("</html>");
                return;
            }

            int fIndex = 0;
            int tIndex = 0;
            int fromEqualIndex;
            int toEqualIndex;

            HashMap<String, String[]> fromRoutes = new HashMap<>();
            HashMap<String, String[]> toRoutes = new HashMap<>();

            String[] fromRoute;
            String[] toRoute;
            String route;
            
            

            try {

                ResultSet fromGet = connection.get("SELECT `routeNo`, `halts` FROM `citytransport`.`route_rs` WHERE `halts` LIKE '%" + from.toLowerCase() + "%' AND `halts` LIKE '%" + to.toLowerCase() + "%'");
                ResultSet toGet;
                
                
                if (fromGet.next()) {
                    fromGet.beforeFirst();
                    while (fromGet.next()) {
                        
                        
                        
                        out.print("<h1>"+fromGet.getString(1)+" - ");
                        out.println(fromGet.getString(2) + "</h1><br>");

                        System.out.print("<h1>"+fromGet.getString(1));
                        System.out.println(fromGet.getString(2)+"</h1><br>");
                        fromRoutes.put(fromGet.getString(1), fromGet.getString(2).split(","));
                    }

                    for (Map.Entry<String, String[]> entry : fromRoutes.entrySet()) {
                        route = entry.getKey();
                        fromRoute = entry.getValue();

                        for (int fromHoult = 0; fromHoult < fromRoute.length; fromHoult++) {
                            if (from.equalsIgnoreCase(fromRoute[fromHoult])) {
                                fIndex = fromHoult;
                            }
                        }
                        for (int toHault = 0; toHault < fromRoute.length; toHault++) {
                            if (to.equalsIgnoreCase(fromRoute[toHault])) {
                                tIndex = toHault;
                            }
                        }

                        int k = fIndex;
                        String path = route + " - ";
                        while (fromRoute.length > -1) {
                            path += fromRoute[k] + " >";
                            if (k == tIndex) {
                                break;
                            }
                            if (fIndex < tIndex) {
                                k++;
                            } else {
                                k--;
                            }
                        }
                        
                        
                        out.println("<hr color='red' size='500'>");
                        out.println("<h1>You Can get this bus</h1>");  
                        out.println("<h1>"+path.substring(0, path.length() - 1)+"</h1>");
                        out.println("<h1>------------------------------------------------------------------------</h1>");
                      
                        System.out.println("<h1>"+path.substring(0, path.length() - 1)+"</h1>");
                        System.out.println("----------------------------------------------------------------------");
                        
                    }

                } 
                
                
                
                else {
                    fromGet = connection.get("SELECT `routeNo`, `halts` FROM `citytransport`.`route_rs` WHERE `halts` LIKE '%" + from.toLowerCase() + "%' ");
                    toGet = connection.get("SELECT `routeNo`, `halts` FROM `citytransport`.`route_rs` WHERE `halts` LIKE '%" + to.toLowerCase() + "%' ");

                    if (fromGet == null) {
                        out.println("<h1>Invalid Data</h1>");
                        out.println("</div>"); //col xs 10
                        out.println("<div class='col-xs-1'>");
                        out.println("</div>"); //col xs 1
                        out.println("</div>"); //row
                        out.println("</div>"); //container
                        out.println("</body>");
                        out.println("</html>");
                        return;
                    }
                    while (fromGet.next()) {
                        out.print("<h1>"+ fromGet.getString(1) +" - ");
                        out.print(fromGet.getString(2) + "</h1>");

                        System.out.print("<h1>"+fromGet.getString(1));
                        System.out.println(fromGet.getString(2)+"</h1>");
                        fromRoutes.put(fromGet.getString(1), fromGet.getString(2).split(","));
                    }

//                    out.println("<h1>------------------------------------------------------------------------</h1>");
//                    System.out.println("----------------------------------------------------------------------");

                    if (toGet == null) {
                        out.println("<h1>Invalid Data</h1>");
                        out.println("</div>"); //col xs 10
                        out.println("<div class='col-xs-1'>");
                        out.println("</div>"); //col xs 1
                        out.println("</div>"); //row
                        out.println("</div>"); //container
                        out.println("</body>");
                        out.println("</html>");
                        return;
                    }
                    while (toGet.next()) {
                        out.print("<h1>"+ toGet.getString(1) +"-");
                        out.print(toGet.getString(2) +"</h1>");

                        System.out.print("<h1>"+ toGet.getString(1));
                        System.out.println(toGet.getString(2) +"</h1>");
                        toRoutes.put(toGet.getString(1), toGet.getString(2).split(","));
                    }
                      
                    System.out.println("----------------------------------------------------------------------");


                    for (Map.Entry<String, String[]> fromEntry : fromRoutes.entrySet()) {
                        String fromRouteNumber = fromEntry.getKey();
                        fromRoute = fromEntry.getValue();
                        for (int fromHoult = 0; fromHoult < fromRoute.length; fromHoult++) {
                            if (from.equalsIgnoreCase(fromRoute[fromHoult])) {
                                fIndex = fromHoult;
                            }
                        }
                        for (int fromHoult = 0; fromHoult < fromRoute.length; fromHoult++) {
                            for (Map.Entry<String, String[]> toEntry : toRoutes.entrySet()) {
                                String toRouteNumber = toEntry.getKey();
                                toRoute = toEntry.getValue();
                                for (int toHault = 0; toHault < toRoute.length; toHault++) {
                                    if (to.equalsIgnoreCase(toRoute[toHault])) {
                                        tIndex = toHault;
                                    }
                                }

                                for (int toHault = 0; toHault < toRoute.length; toHault++) {
                                    if (fromRoute[fromHoult].equalsIgnoreCase(toRoute[toHault])) {
                                        fromEqualIndex = fromHoult;
                                        toEqualIndex = toHault;

                                        int k = fIndex;
                                        String path = "";
                                        while (fromRoute.length > -1) {
                                            path += fromRoute[k] + " >";
                                            if (k == fromEqualIndex) {
                                                break;
                                            }
                                            if (fIndex < fromEqualIndex) {
                                                k++;
                                            } else {
                                                k--;
                                            }
                                        }
                                        
                                        out.println("<br>");
                                        out.println("<h1><font color='red'>You can get these buses</font></h1>");
                                        out.println("<h1>"+fromRouteNumber+" - "+path.substring(0, path.length() - 1)+"</h1>");
                                        out.println("<h1>------------------------------------------------------------------------</h1>");
                                        System.out.println("<h1>"+fromRouteNumber+" - "+path.substring(0, path.length() - 1)+"</h1>");
                                        System.out.println("----------------------------------------------------------------------");
                                     

                                        path = "";
                                        int l = toEqualIndex;
                                        while (toRoute.length > -1) {
                                            path += toRoute[l] + " >";
                                            if (l == tIndex) {
                                                break;
                                            }
                                            if (tIndex > toEqualIndex) {
                                                l++;
                                            } else {
                                                l--;
                                            }
                                        }
                                        
                                        
                                        out.println("<h1>"+toRouteNumber+" - "+path.substring(0, path.length() - 1)+"</h1>");
                                        out.println("<h1>------------------------------------------------------------------------</h1>");
//                                        out.println("<h1><font color='red'>And You can get these buses</font></h1>");
                                        System.out.println("<h1>"+toRouteNumber+" - "+path.substring(0, path.length() - 1)+"</h1>");
                                        System.out.println("----------------------------------------------------------------------");


                                    }
                                }
                            }
                        }

                    }
                }
            } catch (SQLException ex) {
                Logger.getLogger(getRoute.class.getName()).log(Level.SEVERE, null, ex);
            }
            
            out.println("</div>"); //col xs 10
            out.println("<div class='col-xs-1'>");
            out.println("</div>"); //col xs 1
            out.println("</div>"); //row
            out.println("</div>"); //container
            out.println("</body>");
            out.println("</html>");
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
