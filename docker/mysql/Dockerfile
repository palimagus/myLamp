FROM mysql:8.0.31

# Add a database
ENV MYSQL_DATABASE lamp
# Add the content of the sql-scripts/ directory to your image
# All scripts in docker-entrypoint-initdb.d/ are automatically
# executed during container startup
COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

# Copy the custom configuration file from the current directory
# COPY my.cnf /etc/mysql/conf.d/my.cnf

# Expose port 3306 from the container to the host
EXPOSE 3306