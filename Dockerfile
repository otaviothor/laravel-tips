FROM ubuntu:18.04
RUN apt-get update 
RUN apt-get -y install wget net-tools
RUN wget "https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/7.4.13/xampp-linux-x64-7.4.13-0-installer.run/download" -O xampp-installer.run
RUN chmod +x xampp-installer.run
RUN ./xampp-installer.run
RUN rm xampp-installer.run
VOLUME  ["/opt/lampp/htdocs/"]
EXPOSE 80 443 3306
CMD /opt/lampp/lampp start && tail -F /opt/lampp/logs/error_log
