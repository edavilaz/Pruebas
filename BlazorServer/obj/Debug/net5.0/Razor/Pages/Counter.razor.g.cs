#pragma checksum "F:\REPOSITORIOS\Pruebas\BlazorServer\Pages\Counter.razor" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "3c1f7a09b83e4bd4213bd8d2e0c505d954ca1477"
// <auto-generated/>
#pragma warning disable 1591
namespace BlazorServer.Pages
{
    #line hidden
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;
    using Microsoft.AspNetCore.Components;
#nullable restore
#line 1 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using System.Net.Http;

#line default
#line hidden
#nullable disable
#nullable restore
#line 2 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using Microsoft.AspNetCore.Authorization;

#line default
#line hidden
#nullable disable
#nullable restore
#line 3 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using Microsoft.AspNetCore.Components.Authorization;

#line default
#line hidden
#nullable disable
#nullable restore
#line 4 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using Microsoft.AspNetCore.Components.Forms;

#line default
#line hidden
#nullable disable
#nullable restore
#line 5 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using Microsoft.AspNetCore.Components.Routing;

#line default
#line hidden
#nullable disable
#nullable restore
#line 6 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using Microsoft.AspNetCore.Components.Web;

#line default
#line hidden
#nullable disable
#nullable restore
#line 7 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using Microsoft.AspNetCore.Components.Web.Virtualization;

#line default
#line hidden
#nullable disable
#nullable restore
#line 8 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using Microsoft.JSInterop;

#line default
#line hidden
#nullable disable
#nullable restore
#line 9 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using BlazorServer;

#line default
#line hidden
#nullable disable
#nullable restore
#line 10 "F:\REPOSITORIOS\Pruebas\BlazorServer\_Imports.razor"
using BlazorServer.Shared;

#line default
#line hidden
#nullable disable
    [Microsoft.AspNetCore.Components.RouteAttribute("/counter")]
    public partial class Counter : Microsoft.AspNetCore.Components.ComponentBase
    {
        #pragma warning disable 1998
        protected override void BuildRenderTree(Microsoft.AspNetCore.Components.Rendering.RenderTreeBuilder __builder)
        {
            __builder.OpenElement(0, "div");
            __builder.AddAttribute(1, "b-qy1tzsra52");
            __builder.AddMarkupContent(2, "<h1 b-qy1tzsra52>Counter</h1>\r\n\r\n");
            __builder.OpenElement(3, "p");
            __builder.AddAttribute(4, "b-qy1tzsra52");
            __builder.AddContent(5, "Current count: ");
            __builder.AddContent(6, 
#nullable restore
#line 6 "F:\REPOSITORIOS\Pruebas\BlazorServer\Pages\Counter.razor"
                   currentCount

#line default
#line hidden
#nullable disable
            );
            __builder.CloseElement();
            __builder.AddMarkupContent(7, "\r\n\r\n");
            __builder.OpenComponent<BlazorServer.Shared.ComponenteHijo>(8);
            __builder.CloseComponent();
            __builder.CloseElement();
            __builder.AddMarkupContent(9, "\r\n");
            __builder.OpenElement(10, "button");
            __builder.AddAttribute(11, "class", "btn btn-primary");
            __builder.AddAttribute(12, "onclick", Microsoft.AspNetCore.Components.EventCallback.Factory.Create<Microsoft.AspNetCore.Components.Web.MouseEventArgs>(this, 
#nullable restore
#line 11 "F:\REPOSITORIOS\Pruebas\BlazorServer\Pages\Counter.razor"
                                          IncrementCount

#line default
#line hidden
#nullable disable
            ));
            __builder.AddAttribute(13, "b-qy1tzsra52");
            __builder.AddContent(14, "Click me");
            __builder.CloseElement();
        }
        #pragma warning restore 1998
#nullable restore
#line 13 "F:\REPOSITORIOS\Pruebas\BlazorServer\Pages\Counter.razor"
       
    private int currentCount = 0;

    private void IncrementCount()
    {
        currentCount++;
    }

#line default
#line hidden
#nullable disable
    }
}
#pragma warning restore 1591
