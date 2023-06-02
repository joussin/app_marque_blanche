FROM httpd:2.4.32


# active module rewrite and expires
RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf
RUN sed -i '/LoadModule expires_module/s/^#//g' /usr/local/apache2/conf/httpd.conf

#RUN { \
#  echo 'IncludeOptional conf.d/*.conf'; \
#} >> /usr/local/apache2/conf/httpd.conf \
#  && mkdir /usr/local/apache2/conf.d

# Copy apache vhost file to proxy php requests to php-fpm container
COPY ./config.apache.conf /usr/local/apache2/conf/config.apache.conf
RUN echo "Include /usr/local/apache2/conf/config.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf

# verify apache active module
RUN httpd -M

