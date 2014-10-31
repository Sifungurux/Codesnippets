#!/usr/bin/env python

# pushes data to a given server in active

from ftplib import FTP_TLS
from ftplib import FTP

import socket
import sys
import os


FilesToPut = ['test/DHCPLeases.csv'] # Change this to the location of your file

def Push( FtpServer, Username, Password, uploadlist = FilesToPut, port = 21):
        print >> sys.stderr, "Login to %s:%s using %s:%s"%(FtpServer, port, Username, 'xxx')
        ftp = FTP()
        ftps = FTP_TLS()
        ftps.connect(FtpServer,Port)
        ftps.auth()
        ftps.login(Username, Password)           # login anonymously before securing control channel
        ftps.prot_p()
        ftp.set_pasv(False)
        for f in uploadlist:
            #print "uploading %s"%f
               fp = open( f, 'rb')
               os.path.basename(f)
               print f
               ftp.storbinary("STOR,%sx " %(os.path.basename(f),fp))
#ftp.storbinary('STOR, %s',fp %(basename(f)) )   # send the file
        ftp.quit()

if __name__ == "__main__":
        if len(sys.argv) < 5:
                print >> sys.stderr, "usage %s <server> <port> <username> <password>"%sys.argv[0]
                exit( 1 )

        FtpServer = sys.argv[1]
        Port = sys.argv[2]
        Username = sys.argv[3]
        Passwd = sys.argv[4]

        Push(FtpServer, Username, Passwd, port = Port)
        print >> sys.stderr, "Done"

#class tyFTP(FTP_TLS):
#def __init__(self, host='', user='', passwd='', acct='', keyfile=None,
#             certfile=None, timeout=60):
#    FTP_TLS.__init__(self, host, user, passwd, acct, keyfile, certfile, timeout)
def connect(self, host='', port=0, timeout=-999):
    '''Connect to host.  Arguments are:
        - host: hostname to connect to (string, default previous host)
        - port: port to connect to (integer, default previous port)
        '''
    if host != '':
        self.host = host
    if port > 0:
        self.port = port
    if timeout != -999:
        self.timeout = timeout
    try:
        self.sock = socket.create_connection((self.host, self.port), self.timeout)
        self.af = self.sock.family
        #add this line!!!
        self.sock = ssl.wrap_socket(self.sock, self.keyfile, self.certfile,ssl_version=ssl.PROTOCOL_TLSv1)
        #add end
        self.file = self.sock.makefile('rb')
        self.welcome = self.getresp()
    except Exception as e:
        print e
    return self.welcome