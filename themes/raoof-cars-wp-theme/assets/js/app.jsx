function App() {
  const initialPage = (window.RAOOF_THEME && window.RAOOF_THEME.initialPage) || "home";
  const [page, setPage] = React.useState(initialPage);

  const navigate = (id) => {
    setPage(id);
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  return (
    <div data-screen-label={`Raoof Cars - ${page}`}>
      <Navbar current={page} onNavigate={navigate} />
      {page === "home" && <HomePage navigate={navigate} />}
      {page === "fleet" && <FleetPage navigate={navigate} />}
      {page === "services" && <ServicesPage navigate={navigate} />}
      {(page === "about" || page === "contact") && (
        <>
          <PageHero
            eyebrow={page === "about" ? "ABOUT US" : "CONTACT"}
            title={page === "about" ? "من نحن" : "تواصل معنا"}
            img="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=1800&q=80"
          />
          <BookingForm />
        </>
      )}
      <Footer />
      <WhatsAppFab />
    </div>
  );
}

const tryMount = () => {
  const rootEl = document.getElementById("root");
  if (!rootEl) {
    return;
  }

  if (window.HomePage && window.Navbar && window.lucide) {
    ReactDOM.createRoot(rootEl).render(<App />);
  } else {
    setTimeout(tryMount, 50);
  }
};

tryMount();
