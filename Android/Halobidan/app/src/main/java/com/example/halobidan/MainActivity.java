package com.example.halobidan;

import android.Manifest;
import android.content.ActivityNotFoundException;
import android.content.Context;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.location.Address;
import android.location.Geocoder;
import android.location.Location;
import android.location.LocationManager;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;
import android.text.Html;
import android.util.DisplayMetrics;
import android.view.View;
import android.webkit.ValueCallback;
import android.webkit.WebChromeClient;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.ProgressBar;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;

import com.google.android.gms.location.FusedLocationProviderClient;
import com.google.android.gms.location.LocationServices;
import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;

import java.io.IOException;
import java.util.List;
import java.util.Locale;
import java.util.regex.Matcher;
import java.util.regex.Pattern;


public class MainActivity extends AppCompatActivity {

    private LocationManager locationManager;
    private TextView textView;
    private ProgressBar loading;
    private ValueCallback<Uri> mUploadMessage;
    private ValueCallback<Uri[]> uploadMessage;
    public static final int REQUEST_SELECT_FILE = 100;
    private final static int FILECHOOSER_RESULTCODE = 1;

    FusedLocationProviderClient fusedLocationProviderClient;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.activity_main);
        getSupportActionBar().hide();
        WebView web = (WebView) findViewById(R.id.web_view);
        loading = findViewById(R.id.progress);
        loading.setVisibility(View.VISIBLE);
        settings();

        //load_website();
        if(Build.VERSION.SDK_INT >= 19){
            web.setLayerType(View.LAYER_TYPE_HARDWARE, null);
        }else{
            web.setLayerType(View.LAYER_TYPE_SOFTWARE, null);
        }

        web.setWebChromeClient(new WebChromeClient(){
            // For 3.0+ Devices (Start)
            // onActivityResult attached before constructor
            protected void openFileChooser(ValueCallback uploadMsg, String acceptType)
            {
                mUploadMessage = uploadMsg;
                Intent i = new Intent(Intent.ACTION_GET_CONTENT);
                i.addCategory(Intent.CATEGORY_OPENABLE);
                i.setType("image/*");
                startActivityForResult(Intent.createChooser(i, "File Browser"), FILECHOOSER_RESULTCODE);
            }


            // For Lollipop 5.0+ Devices
            public boolean onShowFileChooser(WebView mWebView, ValueCallback<Uri[]> filePathCallback, WebChromeClient.FileChooserParams fileChooserParams)
            {
                if (uploadMessage != null) {
                    uploadMessage.onReceiveValue(null);
                    uploadMessage = null;
                }

                uploadMessage = filePathCallback;

                Intent intent = null;
                if (android.os.Build.VERSION.SDK_INT >= android.os.Build.VERSION_CODES.LOLLIPOP) {
                    intent = fileChooserParams.createIntent();
                }
                try
                {
                    startActivityForResult(intent, REQUEST_SELECT_FILE);
                } catch (ActivityNotFoundException e)
                {
                    uploadMessage = null;
                    return false;
                }
                return true;
            }

            //For Android 4.1 only
            protected void openFileChooser(ValueCallback<Uri> uploadMsg, String acceptType, String capture)
            {
                mUploadMessage = uploadMsg;
                Intent intent = new Intent(Intent.ACTION_GET_CONTENT);
                intent.addCategory(Intent.CATEGORY_OPENABLE);
                intent.setType("image/*");
                startActivityForResult(Intent.createChooser(intent, "File Browser"), FILECHOOSER_RESULTCODE);
            }

            protected void openFileChooser(ValueCallback<Uri> uploadMsg)
            {
                mUploadMessage = uploadMsg;
                Intent i = new Intent(Intent.ACTION_GET_CONTENT);
                i.addCategory(Intent.CATEGORY_OPENABLE);
                i.setType("image/*");
                startActivityForResult(Intent.createChooser(i, "File Chooser"), FILECHOOSER_RESULTCODE);
            }

            @Override
            public void onProgressChanged(WebView view, int newProgress) {
                //ProgressBar akan Terlihat saat Halaman Dimuat
                loading.setVisibility(View.VISIBLE);
                loading.setProgress(newProgress);
                if(newProgress == 100){
                    //ProgressBar akan Menghilang setelah Valuenya mencapat 100%
                    loading.setVisibility(View.GONE);
                }
                super.onProgressChanged(view, newProgress);
            }

        });

        web.setWebViewClient(new WebViewClient(){
            @Override
            public boolean shouldOverrideUrlLoading(WebView view, String url) {
                handleNewUrl(url);
                return false;
            }

            @Override
            public void onPageFinished(WebView view, String url) {
                //ProgressBar akan Menghilang setelah Halaman Selesai Dimuat
                super.onPageFinished(view, url);
                loading.setVisibility(View.GONE);
            }
        });

      //  web.loadUrl("http://halobidan.0hi.me/");
//        web.loadUrl("192.168.100.39/halobidan");

        //getlocation
        fusedLocationProviderClient = LocationServices.getFusedLocationProviderClient(this);

        if (ActivityCompat.checkSelfPermission(MainActivity.this
                , Manifest.permission.ACCESS_FINE_LOCATION) == PackageManager.PERMISSION_GRANTED) {
            getLocation();
        } else {
            ActivityCompat.requestPermissions(MainActivity.this
                    , new String[]{Manifest.permission.ACCESS_FINE_LOCATION}, 44);
        }
    }

    private void handleNewUrl(String url) {
        Uri uri = Uri.parse(url);

        if (url.contains("halobidan")) {
            //openExternalWebsite(url);
        }else{
//            String appPackage = getAppPackageFromUri(uri);
//
//            if (appPackage != null) {
//                PackageManager manager = getPackageManager();
//                Intent appIntent = manager.getLaunchIntentForPackage(appPackage);
//
//                if (appIntent != null) {
//                    startActivity(appIntent);
//                } else {
                    openExternalWebsite(url);
//                }
//            }
        }
    }

    private String getAppPackageFromUri(Uri intentUri) {
        Pattern pattern = Pattern.compile("package=(.*?);");
        Matcher matcher = pattern.matcher(intentUri.getFragment());

        if (matcher.find())
            return matcher.group(1);

        return null;
    }

    private void openExternalWebsite(String url) {
        Intent webeIntent = new Intent(Intent.ACTION_VIEW);
        webeIntent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
        webeIntent.setData(Uri.parse(url));
        startActivity(webeIntent);

        WebView web = (WebView) findViewById(R.id.web_view);
        web.goBack();
    }

    private void settings(){
        WebView web = (WebView) findViewById(R.id.web_view);

        web.getSettings().setJavaScriptEnabled(true);
        web.getSettings().setDomStorageEnabled(true);
        web.getSettings().setAllowUniversalAccessFromFileURLs(true);
        web.getSettings().setAllowFileAccessFromFileURLs(true);
        //web.getSettings().setUseWideViewPort(true);
        //web.getSettings().setLoadWithOverviewMode(true);
        web.getSettings().setJavaScriptCanOpenWindowsAutomatically(true);
        web.getSettings().setDatabaseEnabled(true);
        web.getSettings().setDomStorageEnabled(true);
        String databasePath = this.getApplicationContext()
                .getDir("databases", Context.MODE_PRIVATE).getPath();
        web.getSettings().setDatabasePath(databasePath);
        web.requestFocus();
        web.getSettings().setGeolocationEnabled(true);
        web.getSettings().setGeolocationDatabasePath(databasePath);

        DisplayMetrics displayMetrics = new DisplayMetrics();
        getWindowManager().getDefaultDisplay().getMetrics(displayMetrics);
        int height = displayMetrics.heightPixels;
        int width = displayMetrics.widthPixels;
        if(width > 720){
            web.setInitialScale(230);
        }else{
            web.setInitialScale(150);
        }
    }

    private void load_website(){
        WebView web = (WebView) findViewById(R.id.web_view);

    }

    @Override
    public void onActivityResult(int requestCode, int resultCode, Intent intent) {
        super.onActivityResult(requestCode, resultCode, intent);
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.LOLLIPOP) {
            if (requestCode == REQUEST_SELECT_FILE) {
                if (uploadMessage == null)
                    return;
                uploadMessage.onReceiveValue(WebChromeClient.FileChooserParams.parseResult(resultCode, intent));
                uploadMessage = null;
            }
        } else if (requestCode == FILECHOOSER_RESULTCODE) {
            if (null == mUploadMessage)
                return;
            // Use MainActivity.RESULT_OK if you're implementing WebView inside Fragment
            // Use RESULT_OK only if you're implementing WebView inside an Activity
            Uri result = intent == null || resultCode != MainActivity.RESULT_OK ? null : intent.getData();
            mUploadMessage.onReceiveValue(result);
            mUploadMessage = null;
        }


    }

    @Override
    public void onBackPressed() {
        WebView web = (WebView) findViewById(R.id.web_view);
        if (web.canGoBack()) {
            web.goBack();
        } else {
            super.onBackPressed();
        }
    }

    public void getLocation() {
        if (ActivityCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED && ActivityCompat.checkSelfPermission(this, Manifest.permission.ACCESS_COARSE_LOCATION) != PackageManager.PERMISSION_GRANTED) {
            // TODO: Consider calling
            //    ActivityCompat#requestPermissions
            // here to request the missing permissions, and then overriding
            //   public void onRequestPermissionsResult(int requestCode, String[] permissions,
            //                                          int[] grantResults)
            // to handle the case where the user grants the permission. See the documentation
            // for ActivityCompat#requestPermissions for more details.
            return;
        }
        fusedLocationProviderClient.getLastLocation().addOnCompleteListener(new OnCompleteListener<Location>() {
            @Override
            public void onComplete(@NonNull Task<Location> task) {
                Location location = task.getResult();
                if(location != null){
                    try {
                        Geocoder geocoder = new Geocoder(MainActivity.this
                                , Locale.getDefault());

                        List<Address> addresses = geocoder.getFromLocation(
                                location.getLatitude(),location.getLongitude(),1
                                )   ;

                        if(addresses.get(0).getSubLocality() != null){
                            textView = (TextView) findViewById(R.id.text_view_loc);
                            textView.setText(Html.fromHtml(""+addresses.get(0).getSubLocality()));
                        }else{
                            textView = (TextView) findViewById(R.id.text_view_loc);
                            textView.setText(Html.fromHtml(""+addresses.get(0).getLocality()));
                        }


                    }catch (IOException e) {

                    }
                }
            }
        });
    }
}

